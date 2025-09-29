<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'identity_number' => 'required|exists:donors,identity_number',
            'blood_type' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
    ]);

    $donor = Donor::where('identity_number', $request->identity_number)->first();

    if (!$donor) {
        return response()->json(['success' => false, 'message' => 'Donor not found']);
    }

    // تسجيل التبرع
    $donation = $donor->donations()->create([
        'blood_type' => $request->blood_type,
        'blood_bank_id' => auth()->id(), // بنك الدم الحالي
        'donated_at' => now(),
    ]);

    return response()->json(['success' => true, 'message' => 'Donation registered successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
