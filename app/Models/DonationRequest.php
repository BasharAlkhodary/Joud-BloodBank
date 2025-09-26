<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{
    use HasFactory;

    protected $fillable = ['blood_type', 'blood_bank_id'];

    public function bloodBank()
    {
        return $this->belongsTo(BloodBank::class);
    }
}
