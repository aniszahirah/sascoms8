<?php

namespace App\Http\Controllers\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Carbon;
//use App\Clinics;
use App\Models\Clinic;
use PDF;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinics = Clinic::all();

        return view('list', compact('clinics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clinic.create_report');
    }

    public function viewAll(){      

        // $clinic = DB::table('clinics')->latest()->paginate(4);
        // $staffData= DB::table('users')
        //                 ->where('reviewreport', '=', 1)
        //                 ->get();

        //$clinics = DB::select('select * from clinics')->latest()->paginate(4);
        $clinics = DB::table('clinics')->latest()->paginate(4);

        return view('managereports.all-clinic', ['clinics'=>$clinics]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //     $clinic = new Clinic;
        //     $clinic->issue = request('issue');
        //     $clinic->comment = request('comment');
        //     $clinic->correctiveaction = request('correctiveaction');
        //     $clinic->followup = request('followup');
        //     $current_time = new Carbon();
        //     $clinic->save();
        
        // return redirect('/clinic/create')->with('message','Data is added successfully!');
        // return redirect()->route('dashboard');

        Clinic::insert([
            'issue' => $request->issue,
            'received_date' => Carbon::now(),
            'status' => "Pending",
        ]);

        $notification = array(
            'message' => 'Your complaint form is successfully submitted.',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
        
    }

    public function assignStaff($id){

        $clinic = Clinic::findOrFail($id);
        $staffs= DB::table('users')
                         ->where('reviewreport', '=', 1)
                         ->get();

        return view('clinic.assignstaff', compact('clinic', 'staffs'));
    }

    public function storeAssignStaff(Request $request, $id){

        // $received_staff = DB::table('users')
        //                     ->select('name')
        //                     ->where('id', '=', $request->review_staff)
        //                     ->get();

        Clinic::findOrFail($id)->update([
            'scu_id' => $request->review_staff,
            'received_by' => DB::table('users')
                                ->select('name')
                                ->where('id', '=', $request->review_staff)
                                ->get(),
            'received_date' => Carbon::now(),
            'status' => "In review",
        ]);

        return redirect()->route('clinic.view-all');

    }

    public function commentClinic($id){

        $clinic = Clinic::findOrFail($id);

        return view('clinic.comment_clinic', compact('clinic'));
    }

    public function storeComment(Request $request, $id){

        Clinic::findOrFail($id)->update([
            'comment' => $request->comment,
            'correctiveaction' => $request->correctiveaction,
            'followup' => $request->followup,
            'status' => 'To verify'
        ]);

        return redirect()->route('view.task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $clinics = DB::select('select * from clinics');
        return view('clinic.show_report',['clinics'=>$clinics]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinic = clinic::find($id);

        return view('clinic.edit')->with('clinic',$clinic);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function pdf()
    // {
    //     $pdf = \App::make('dompdf.wrapper');
    //     $pdf->loadHTML($this->
    //         convert_clinics_to_html());
    //     $pdf->stream();
    // }

    public function view($id) {
        $clinic = clinic::find($id);
        
        return view('clinic.view',compact('clinic'));
    }

    public function pdf($id) {
        $clinic = clinic::find($id);
        $pdf = PDF::loadView('/clinic/pdf', compact('clinic'));
        
        return $pdf->download('clinic.pdf');
    }

    public function manage()
    {
        $clinics = DB::select('select * from clinics');
        return view('clinic.show_report',['clinics'=>$clinics]);
    }


}
