<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtOfClickModel extends Model
{
    protected $table = 'art_of_click_models';
    protected $fillable = [
        'id',
        'name',
        'incent',
        'previewUrl',
        'description',
        'payoutType',
        'payout',
        'currency',
        'storeId',
        'noticePeriod',
        'creatives',
        'browser',
        'device',
        'os',
        'osVersionMinimum',
        'countries',
        'trackingUrl',
        'approved',
        'downloadType',
        'monthlyCap',
        'dailyCap',
        'dailyCapsRemaining',
    ];
    protected $hidden = [];

    public $timestamps  = false;
}
