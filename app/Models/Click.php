<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $fillable = [
        'affiliate_id',
        'ip_address',
        'clicked_at'
    ];

    public function affiliate()
    {
        return $this->belongsTo(Affiliate::class);
    }

    protected function casts()
    {
        return [
            'clicked_at' => 'timestamp',
        ];
    }
}
