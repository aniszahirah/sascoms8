<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
//use App\Programs;
use App\User;
use PDF;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::all();

        return view('list', compact('programs'));
    }

    public function viewAll(){      

        //$programs = DB::table('programs')->latest()->paginate(4);
        // $staffData= DB::table('users')
        //                 ->where('reviewreport', '=', 1)
        //                 ->get();
        $programs = DB::table('programs')->latest()->paginate(4);

        return view('managereports.all-program', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program.create_report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $program = new Program;
        
        // $program->name = request('name');
        // $program->date = request('date');
        // $program->organizer = request('organizer');
        // $program->pic = request('pic');
        // $program->program_details = request('program_details');
        // $program->attachment = request('attachment');
        // $program->briefing_date = request('briefing_date');
        // $program->briefing_time = request('briefing_time');
        // $program->briefing_person = request('briefing_person');
        // $program->advise_date = request('advise_date');
        // $program->advise_time = request('advise_time');
        // $program->advise_details = request('advise_details');
        // $program->during_prog_report = request('during_prog_report');
        // $program->corrective_action = request('corrective_action');
        // $program->save();

        // return redirect('/program/create')->with('message','Data is added successfully!');

        Program::insert([
            // 'programid' => Auth::user()->id,
            'name' => $request->name,
            'date' => $request->date,
            'organizer' => $request->organizer,
            'pic' => $request->pic,
            'program_details' => $request->program_details,
            'attachment' => $request->attachment,
            'received_date' => Carbon::now(),
            'status' => "Pending",
        ]);

        $notification = array(
            'message' => 'Your program monitoring form is successfully submitted.',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function assignStaff($id){

        $program = Program::findOrFail($id);
        $staffs= DB::table('users')
                         ->where('reviewreport', '=', 1)
                         ->get();

        return view('program.assignstaff', compact('program', 'staffs'));
    }

    public function storeAssignStaff(Request $request, $id){

        // $received_staff = DB::table('users')
        //                     ->select('name')
        //                     ->where('id', '=', $request->review_staff)
        //                     ->get();

        Program::findOrFail($id)->update([
            'scu_id' => $request->review_staff,
            'received_by' => DB::table('users')
                                ->select('name')
                                ->where('id', '=', $request->review_staff)
                                ->get(),
            'received_date' => Carbon::now(),
            'status' => "In review",
        ]);

        return redirect()->route('program.view-all');

    }

    public function commentProgram($id){

        $program = Program::findOrFail($id);

        return view('program.commentProgram', compact('program'));
    }

    public function storeComment(Request $request, $id){

        Program::findOrFail($id)->update([
            'briefing_date' => $request->briefing_date,
            'briefing_time' => $request->briefing_time,
            'briefing_person' => $request->briefing_person,
            'advise_date' => $request->advise_date,
            'advise_time' => $request->advise_time,
            'advise_details' => $request->advise_details,
            'during_prog_report' => $request->during_prog_report,
            'corrective_action' => $request->corrective_action,
            'status' => 'To verify'
        ]);

        return redirect()->route('view.task');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        $programs = DB::select('select * from programs');
        return view('program.show_report',['programs'=>$programs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $program = Program::find($id);

        return view('program.edit')->with('program',$program);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }

    public function view($id) {
        $program = program::find($id);
        
        return view('program.view',compact('program'));
    }

    public function pdf($id) {
        $program = program::find($id);
        $pdf = PDF::loadView('/program/pdf', compact('program'));
        
        return $pdf->download('program.pdf');
    }
}
