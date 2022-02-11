<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    public function ViewAllUser(){

        $users = DB::table('users')
                 ->join('role_user', 'role_user.user_id', 'users.id')
                 ->join('roles', 'role_user.role_id', 'roles.id')
                 ->select('users.*', 'roles.display_name')
                 ->latest()->paginate(10);


        return view('admin.managestaff.view', compact('users'));
    }

    public function SearchUser(Request $request){

        return $request;
    }

    public function EditUserAccess($id){

        $user = User::findOrFail($id);

        // $user = DB::table('users')
        //          ->join('role_user', 'role_user.user_id', 'users.id')
        //          ->join('roles', 'role_user.role_id', 'roles.id')
        //          ->select('users.*', 'roles.display_name')
        //          ->where('users.id', "=", $id)
        //          ->get();

        return view('admin.managestaff.edit-access', compact('user'));
    }

    public function UpdateUserAccess(Request $request, $id){

        User::find($id)->update([
            'allreport' => $request->allreport,
            'alluser' => $request->alluser,
            'reviewreport' => $request->reviewreport,
            'assignstaff' => $request->assignstaff,
            'reviewstatistic' => $request->reviewstatistic,
        ]);

        $notification = array(
            'message' => "User access updated successfully",
            'alert-type' => 'success'
        );

        return redirect()->route('user.view')->with($notification);
    }
}
