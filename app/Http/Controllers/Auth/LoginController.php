<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller{
    public function authenticate(Request $request){
        // Retrive Input
        $credentials = $request->only('email', 'password');

        if (Auth::check() && Auth::user()->role->id == 1 ){
          $this->rediectTo = route('admin.dashboard');
        }
        elseif (Auth::check() && Auth::user()->role->id == 2 ){
          $this->rediectTo = route('dsc.dashboard');
        }
        else{
          $this->redirectTo = route('ndsc.dashboard');
        }
        // if failed login
        return redirect('login');
    }

    // public function __construct(){
    //
    //   if (Auth::check() && Auth::user()->role->id == 1 ){
    //     $this->rediectTo = route('admin.dashboard');
    //   }
    //   elseif (Auth::check() && Auth::user()->role->id == 2 ){
    //     $this->rediectTo = route('dsc.dashboard');
    //   }
    //   else{
    //     $this->redirectTo = route('ndsc.dashboard');
    //   }
    //
    //   $this->middleware('guest')->except('logout');
    // }
}
