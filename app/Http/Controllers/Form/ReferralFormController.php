<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReferralForm;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
//use DB;

class ReferralFormController extends Controller
{      
    public function viewAll(){      

        $referrals = DB::table('referral_forms')->latest()->paginate(8);

        return view('managereports.all-referral', compact('referrals'));
    }

    public function create(){
        return view('forms.referral.create');
    }

    public function store(Request $request){

        if(!empty($request->input('purpose'))){
            $getPurpose = join(', ', $request->input('purpose'));   
        }
        else{
            $getPurpose = '';
        }
 
        ReferralForm::insert([
            'name' => $request->name,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
            'gender' => $request->gender,
            'ref_no' => $request->ref_no,
            'nric' => $request->nric,
            'dept' => $request->dept,
            'doc_expertise' => $request->doc_expertise,
            'pt_diagnosis' => $request->pt_diagnosis,
            'case_type' => $request->case_type,
            'purpose' => $getPurpose,
            'details' => $request->details,
            'doc_id' => Auth::user()->id,
            'report_date' => Carbon::now(),
            'case_status' => 'Pending',
        ]);

        return redirect()->route('dashboard');

    }

    public function viewReferralDetails($case_no){

        $referral = ReferralForm::findOrFail($case_no);
        // $staff = ReferralForm::join('users', 'users.id', '=', 'referral_forms.doc_id')
        //                     ->where('users.id', 'referral_forms.doc_id')
        //                     ->get(['users.name', 'users.position', 'users.dept']); JOIN TABLE

        return view('managereports.view-referral-details', compact('referral'));
    }

    public function pdf($id) {
        $referral = ReferralForm::find($id);
        $pdf = PDF::loadView('Forms/referral/pdf', compact('referral'));
        
        return $pdf->download('referral.pdf');
    }
}
