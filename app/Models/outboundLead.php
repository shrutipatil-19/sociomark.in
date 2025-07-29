<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class outboundLead extends Model
{
    protected $fillable = [
        'name','company_name','email', 'phone', 'linkedin_url', 'website_url','service',
        'industry', 'designation', 'source', 'status', 'first_contact_date','notes',
        'second_followup_date', 'notes2', 'budget' ,'third_follow_up_date', 'notes3','assigned_to'
    ];
}