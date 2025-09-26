<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;

        public function donors()
    {   
        return $this->hasMany(Donor::class, 'blood_bank_id');
    }

    // اعداد علاقة ارسال الاشعارات 
    public function donationRequests()
{
    return $this->hasMany(DonationRequest::class);
}

}
