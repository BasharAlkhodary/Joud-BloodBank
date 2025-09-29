<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;


    protected $fillable = [
    'user_id',
    'identity_number',
    'phone_number',
    'gender',
    'blood_bank_id',
    'address',
    'birth_date',
    'blood_type',
];


public function user()
{
    return $this->belongsTo(User::class);
}

    public function bloodBank()
    {
        return $this->belongsTo(User::class, 'blood_bank_id');
    }

    //علاقة لتسجيل التبرع
    public function donations()
{
    return $this->hasMany(Donation::class);
}
}


