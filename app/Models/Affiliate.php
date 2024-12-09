<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    protected $fillable = [
        'name',
        'referral_code'
    ];

    public function clicks() {
        return $this->hasMany(Click::class);
    }
}
