<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintForm extends Model
{
    protected $fillable = [
        'complainant_id',
        'complainant_name',
        'complaint_date',
        'phone_no',
        'department',
        'complaint_type',
        'details',
        'scu_id',
        'received_by',
        'received_date',
        'investigation',
        'immediate_action',
        'immediate_completion',
        'longterm_action',
        'longterm_completion',
        'verified_by',
        'status',
    ];

}
