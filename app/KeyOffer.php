<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyOffer extends Model
{
    protected $table = 'key_offers';
    protected $fillable = [
        'id', 'key', 'network', 'affiliate_id'
    ];

    protected $hidden = [];

    public function offers()
    {
        return $this->hasMany('App\Offer', 'key_id');
    }
}
