<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('donor.home');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        
    }

public function search(Request $request)
{
    $identity = $request->get('identity_number');

    $donor = Donor::with('user')
        ->where('identity_number', $identity)
        ->first();

    if ($donor) {
        return response()->json([
            'success' => true,
            'data' => [
                'id' => $donor->id,
                'full_name' =>  $donor->user->first_name . ' ' .
                                $donor->user->father_name . ' ' .
                                $donor->user->grandfather_name . ' ' .
                                $donor->user->family_name,
                'identity_number' => $donor->identity_number,
                'blood_type' => $donor->blood_type ?? 'غير محدد'
            ]
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'المتبرع غير موجود'
    ]);
}
}
