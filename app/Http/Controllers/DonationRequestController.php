<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationRequest;
use App\Models\Donor;
use App\Models\BloodBank;

use Illuminate\Support\Facades\Log;


class DonationRequestController extends Controller
{
public function store(Request $request)
    {
        $request->validate([
            'blood_type' => 'required|string',
        ]);

        $bloodBank = auth()->user()->bloodBank;

        if (!$bloodBank) {
            return redirect()->back()->withErrors('لم يتم العثور على بنك الدم الخاص بك.');
        }

        $donationRequest = DonationRequest::create([
            'blood_type' => $request->blood_type,
            'blood_bank_id' => $bloodBank->id,
        ]);


        // فلترة المتبرعين حسب زمرة الدم 
        $donors = Donor::where('blood_type', $request->blood_type)->get();

        foreach ($donors as $donor) {
            if ($donor->phone_number) {
                $this->sendSmsNotification($donor->phone_number, $request->blood_type, $bloodBank);
            }
        }

        return redirect()->back()->with('success', 'تم إرسال الإشعارات للمتبرعين بنجاح.');
    }

    protected function sendSmsNotification($phoneNumber, $bloodType, $bloodBank)
    {
        $message = "لطفًا، توجّه إلى بنك الدم: {$bloodBank->name}، المتواجد في: {$bloodBank->location}، للتبرع بفصيلة دم: {$bloodType}.";
        Log::channel('notifications')->info("SMS to {$phoneNumber}: {$message}");
    }

}