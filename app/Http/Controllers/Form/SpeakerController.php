<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speaker = Speaker::all();

        return view('list', compact('speaker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('speaker.create_report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $speaker = new Speaker;
        
        $speaker->programname = request('programname');
        $speaker->date = request('date');
        $speaker->speakername = request('speakername');
        $speaker->institution = request('institution');
        $speaker->agreement = request('agreement');
        $speaker->save();

        return redirect('/dashboard')->with('message','Data is added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function show(Speaker $speaker)
    {
        $speaker = DB::select('select * from speakers');
        return view('speaker.show_report',['speakers'=>$speaker]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function edit(Speaker $speaker)
    {
        $speaker = Speaker::find($id);

        return view('speaker.edit')->with('speaker',$speaker);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speaker $speaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Speaker  $speaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speaker $speaker)
    {
        //
    }

    public function view($id) {
        $speaker = speaker::find($id);
        
        return view('speaker.view',compact('speaker'));
    }

    public function pdf($id) {
        $speaker = speaker::find($id);
        $pdf = PDF::loadView('speaker/pdf', compact('speaker'));
        
        return $pdf->download('speaker.pdf');
    }
}
