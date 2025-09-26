<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\BloodBank;
use App\Models\Donor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class RegisterDonorController extends Controller
{
    public function create()
    {
        $bloodBanks = User::where('is_admin', 2)->get();
        return view('auth.donors.register', compact('bloodBanks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'        => ['required', 'string', 'max:255'],
            'father_name'        => ['required', 'string', 'max:255'],
            'grandfather_name'  => ['required', 'string', 'max:255'],
            'family_name'       => ['required', 'string', 'max:255'],
            'identity_number'   => ['required', 'string', 'unique:donors,identity_number'],
            'phone_number'      => ['required', 'string', 'unique:donors,phone_number'],
            'gender'            => ['required', 'in:male,female'],
            'blood_bank_id'     => ['nullable', 'exists:users,id'],
            'email'             => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'address'           => ['required', 'string', 'max:255'],
            'birth_date'         => ['required', 'date','before_or_equal:today'],
            'password'          => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // إنشاء المستخدم
    $user = DB::transaction(function () use ($request) {
        $user = User::create([
            'first_name'        => $request->first_name,
            'father_name'        => $request->father_name,
            'grandfather_name'  => $request->grandfather_name,
            'family_name'       => $request->family_name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
            'is_admin'          => 0, // متبرع 
        ]);

        // انشاء المتبرع 
        Donor::create([
            'user_id'           => $user->id,
            'identity_number'   => $request->identity_number,
            'gender'            => $request->gender,
            'phone_number'      => $request->phone_number,
            'blood_bank_id'     => $request->blood_bank_id,
            'address'           => $request->address,
            'birth_date'         => $request->birth_date,
        ]);
            return $user;
    });

    Auth::login($user);

    return redirect('/donor/home')->with('success', 'تم إنشاء الحساب بنجاح!');
}

public function indexBloodBanks()
{
    // استرجاع كل المستخدمين اللي نوعهم بنك دم
    $bloodBanks = User::where('is_admin', 2)->get();

    // إرسالهم للواجهة
    return view('bloodbanks.index', compact('bloodBanks'));
}


}