<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComplaintForm;
use Illuminate\Support\Carbon;
use Auth;
use DB;
use PDF;

class ComplaintFormController extends Controller
{
    public function viewAll(){      

        $complaints = DB::table('complaint_forms')->latest()->paginate(4);
        // $staffData= DB::table('users')
        //                 ->where('reviewreport', '=', 1)
        //                 ->get();

        return view('managereports.all-complaint', compact('complaints'));
    }

    public function create(){
        return view('forms.complaint.create');
    }

    public function storeReport(Request $request){

        ComplaintForm::insert([
            'complainant_id' => Auth::user()->id,
            'complainant_name' => Auth::user()->name,
            'complaint_date' => Carbon::now(),
            'phone_no' => Auth::user()->contact_no,
            'department' => Auth::user()->dept,
            'complaint_type' => $request->complaint_type,
            'details' => $request->details,
            'received_date' => Carbon::now(),
            'status' => "Pending",
        ]);

        $notification = array(
            'message' => 'Your complaint form is successfully submitted.',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);

    }

    public function viewComplaintDetails($id){

        $complaint = ComplaintForm::findOrFail($id);

        return view('managereports.view-complaint-details', compact('complaint'));
    }

    public function assignStaff($id){

        $complaint = ComplaintForm::findOrFail($id);
        $staffs= DB::table('users')
                         ->where('reviewreport', '=', 1)
                         ->get();

        return view('forms.complaint.assignstaff', compact('complaint', 'staffs'));
    }

    public function storeAssignStaff(Request $request, $id){

        // $received_staff = DB::table('users')
        //                     ->select('name')
        //                     ->where('id', '=', $request->review_staff)
        //                     ->get();

        // ComplaintForm::findOrFail($id)->update([
        //     'scu_id' => $request->review_staff,
        //     'received_by' => DB::table('users')
        //                         ->select('name')
        //                         ->where('id', '=', $request->review_staff)
        //                         ->get(),
        //     'received_date' => Carbon::now(),
        //     'status' => "In review",
        // ]);

        ComplaintForm::findOrFail($id)->update([
            'scu_id' => $request->review_staff,
            'received_by' => DB::table('users')
                                ->select('name')
                                ->where('id', '=', $request->review_staff)
                                ->get(),
            'received_date' => Carbon::now(),
            'status' => "In review",
        ]);

        return redirect()->route('complaint.view-all');

    }

    public function investigateComplaint($id){

        $complaint = ComplaintForm::findOrFail($id);

        return view('forms.complaint.investigate', compact('complaint'));
    }

    public function storeInvestigation(Request $request, $id){

        ComplaintForm::findOrFail($id)->update([
            'investigation' => $request->details,
            'immediate_action' => $request->immediate_action,
            'immediate_completion' => $request->immediate_completion,
            'longterm_action' => $request->longterm_action,
            'longterm_completion' => $request->longterm_completion,
            'status' => 'To verify'
        ]);

        return redirect()->route('view.task');
    }

    public function show()
    {
        $complaint = DB::select('select * from complaint_forms');
        return view('forms.complaint.show_report',['complaint'=>$complaint]);
    }

    public function view($id) {
        $complaint = ComplaintForm::find($id);
        
        return view('forms.complaint.view',compact('complaint'));
    }

    public function pdf($id) {
        $complaint = ComplaintForm::find($id);
        $pdf = PDF::loadView('/forms/complaint/pdf', compact('complaint'));
        
        return $pdf->download('forms.complaint.pdf');
    }
}
