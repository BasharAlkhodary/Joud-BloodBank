<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'donor_id',
        'blood_type',
        'blood_bank_id',
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }

    public function bloodBank()
    {
        return $this->belongsTo(User::class, 'blood_bank_id'); // إذا بنك الدم مخزن في users
    }



}
