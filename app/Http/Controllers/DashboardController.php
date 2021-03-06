<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        if(Auth::user()->hasRole('admin')){
            return view('user.admin_index');
        }
        elseif(Auth::user()->hasRole('dsc')){
            return view('user.dsc_index');
        }
        elseif(Auth::user()->hasRole('ndsc')){
            return view('user.ndsc_index');
        }

        // return view('layouts.app');

    }
}
