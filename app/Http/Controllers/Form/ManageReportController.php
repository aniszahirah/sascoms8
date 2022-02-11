<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\ComplaintForm;
use Carbon\Carbon;
use Auth;
use DB;

class ManageReportController extends Controller
{
    public function viewAllReport(){      
        return view('reports.view');
    }

    public function viewReportHistory(){
        

        // $complaints = DB::table('complaint_forms')->where('complainant_id', '=', Auth::user()->id)
        //                                         ->orderBy('status', 'DESC')
        //                                         ->get();

        // $referrals = DB::table('referral_forms')->where('doc_id', '=', Auth::user()->id)
        //                                             ->orderBy('case_status', 'DESC')
        //                                             ->get();

        // $slo = DB::table('slo_reports')->where('slo_id', '=', Auth::user()->id)
        //                                         ->orderBy('status', 'DESC')
        //                                         ->get();

        // return view('user.report_history', compact('complaints', 'referrals', 'slo'),['programs'=>$programs]);

        $complaints = DB::table('complaint_forms')->where('scu_id', '=', Auth::user()->id)
                                                ->orderBy('status', 'DESC')
                                                ->get();
        
        $terms = DB::select('select * from terms');

        $speakers = DB::select('select * from speakers');

        $programs = DB::select('select * from programs');

        $documents = DB::select('select * from document_reviews');

        $referrals = DB::select('select * from referral_forms');

        $sloreports = DB::select('select * from slo_reports');

        $clinics = DB::select('select * from clinics');

        return view('user.report_history', compact('complaints','terms','speakers','programs','documents'
        ,'referrals','sloreports','clinics'));
    }

}
