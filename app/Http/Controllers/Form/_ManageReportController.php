<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\ComplaintForm;
use App\Models\Terms;
use App\Models\Speaker;
use App\Models\Program;
use App\Models\Clinic;
use Carbon\Carbon;
use Auth;
use DB;

class ManageReportController extends Controller
{
    public function viewAllReport(){      
        return view('reports.view');
    }

    public function viewReportHistory(){

        $clinics = DB::select('select * from clinics');

        $terms = DB::select('select * from terms');

        $programs = DB::select('select * from programs');

        $speaker = DB::select('select * from speakers');

        //$complaint = DB::select('select * from complaint_forms');

        $complaints = DB::table('complaint_forms')->where('id', '=', Auth::user()->id)
                                                ->orderBy('status', 'DESC')
                                                ->get();

        return view('user.report_history', compact('complaints'),['programs'=>$programs,'terms'=>$terms,
        'speakers'=>$speaker,'clinics'=>$clinics]);

        
    }


}
