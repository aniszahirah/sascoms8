<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Auth;
use DB;

class MyTaskController extends Controller
{
    public function viewTask(){

        $complaints = DB::table('complaint_forms')->where('scu_id', '=', Auth::user()->id)
                                                ->orderBy('status', 'DESC')
                                                ->get();
        
        // $terms = DB::table('terms')->where('scu_id', '=', Auth::user()->id)
        // ->orderBy('status', 'DESC')
        // ->get();
        $terms = DB::select('select * from terms');

        $speakers = DB::select('select * from speakers');

        $programs = DB::select('select * from programs');

        $clinics = DB::select('select * from clinics');

        $documents = DB::select('select * from document_reviews');

        return view('MyTask.view', compact('complaints','terms','speakers','programs','clinics','documents'));
    }
}
