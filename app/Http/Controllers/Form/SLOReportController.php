<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SloReport;
use Illuminate\Support\Carbon;
use Auth;
use DB;
use PDF;

class SLOReportController extends Controller
{
    public function viewAll(){      

        $sloreports = DB::table('slo_reports')->latest()->paginate(8);

        return view('managereports.all-slo-report', compact('sloreports'));
    }

    public function create(){
        return view('forms.sloreport.create');
    }

    public function storeReport(Request $request){

        SloReport::insert([
            'slo_id' => Auth::user()->id,
            'slo_name' => Auth::user()->name,
            'dept' => Auth::user()->dept,
            'report_date' => Carbon::now(),
            'report_details' => $request->report_details,
            'slo_action' => $request->slo_action,
            'status' => "Pending",
        ]);

        return redirect()->route('dashboard');

    }

    public function viewSLOReportDetails($id){

        $sloreports = SloReport::findOrFail($id);

        return view('managereports.view-sloreport-details', compact('sloreports'));
    }

    public function pdf($id) {
        $slo = SloReport::find($id);
        $pdf = PDF::loadView('forms/sloreport/pdf', compact('slo'));
        
        return $pdf->download('slo_report.pdf');
    }
}
