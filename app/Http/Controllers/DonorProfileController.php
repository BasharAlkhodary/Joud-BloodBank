<?php

namespace App\Http\Controllers;

use App\Models\BloodBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donor;

class DonorProfileController extends Controller
{
        public function edit()
    {
        $donor = Donor::where('user_id', Auth::id())->firstOrFail();
        $bloodBanks = BloodBank::all();
        return view('donor.profile', compact('donor', 'bloodBanks'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone_number'      => 'required|regex:/^05[0-9]{8}$/',
            'address'           => 'required|string|max:255',
            'blood_bank_id'     => 'nullable|exists:blood_banks,id',

        ]);

        $donor = Donor::where('user_id', Auth::id())->firstOrFail();

            $donor->phone_number    = $request->phone_number;
            $donor->address         = $request->address;
            $donor->blood_bank_id   = $request->blood_bank_id;
            $donor->save();

            return redirect()->route('donor.home')->with('success', 'تم تحديث البيانات بنجاح.');
    }
}
