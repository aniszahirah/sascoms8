<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['name','date','organizer','pic','program_details','briefing_date',
                            'briefing_time','briefing_person','advise_date','advise_time',
                            'advise_details','during_prog_report','corrective_action'];
}
