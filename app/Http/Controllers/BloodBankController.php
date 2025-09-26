<?php

namespace App\Http\Controllers;

use App\Models\BloodBank;
use App\Models\Donor;
use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index(Request $request)
        {
            $donors = Donor::with('user')
                ->whereHas('user', function ($query) {
                    $query->where('is_admin', 0);
                })
                ->orderBy('id', 'asc')
                ->paginate(10);

            // إذا الطلب Ajax نرجع فقط جدول المتبرعين
            if ($request->ajax()) {
                return view('partials.donors_table', compact('donors'))->render();
            }

            // أول مرة تحميل الصفحة
            return view('bloodbank.dashboard', compact('donors'));
        }

public function updateBloodType(Request $request, $donorId)
{
    $donor = Donor::findOrFail($donorId);
    $donor->blood_type = $request->blood_type;
    $donor->save();

    return response()->json(['success' => true, 'message' => 'تم تعديل زمرة الدم بنجاح']);
}





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function show(BloodBank $bloodBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodBank $bloodBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodBank $bloodBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodBank  $bloodBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodBank $bloodBank)
    {
        //
    }
}
