<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $table = 'offers';
    protected $fillable = [
        'id',
        'offer_id',
        'name',
        'description',
        'require_approval',
        'require_terms_and_conditions',
        'terms_and_conditions',
        'preview_url',
        'currency',
        'default_payout',
        'status',
        'expiration_date',
        'payout_type',
        'percent_payout',
        'featured',
        'conversion_cap',
        'monthly_conversion_cap',
        'payout_cap',
        'monthly_payout_cap',
        'allow_website_links',
        'allow_direct_links',
        'show_custom_variables',
        'show_mail_list',
        'dne_list_id',
        'email_instructions',
        'email_instructions_from',
        'email_instructions_subject',
        'has_goals_enabled',
        'default_goal_name',
        'use_target_rules',
        'is_expired',
        'dne_download_url',
        'dne_unsubscribe_url',
        'dne_third_party_list',
    ];

    protected $hidden = [];

}
