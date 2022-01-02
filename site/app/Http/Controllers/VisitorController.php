<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class VisitorController extends Controller
{
    function visitorIndex(){
        $users = Admin::all();
        return view('Admin.visitors', compact('users'));
    }

    public function activeUser($id){
        $user = Admin::where('id', $id)->first();
        if ($user->status == 1){
            $updateStatus = Admin::where('id', $id)->update(['status'=>0]);
        }else{
            $updateStatus = Admin::where('id', $id)->update(['status'=>1]);
        }
    return redirect('visitors');
    }
}
