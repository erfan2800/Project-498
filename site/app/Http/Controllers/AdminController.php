<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Adminl;
use App\Models\AdminLog;
use Illuminate\Http\Request;
use App\Models\AdminLogin;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Variable;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        return view('Admin.dashboard');

    }
    public function admin(){
        return view('Admin.adminLogin');
    }


    function login_check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);


        $userInfo = Adminl::where('email', $request->email)->first();

        if (!$userInfo){
            return back()->with('fail', 'We do not recognize your email address. or contact with admin.');
        }else{

            if (Hash::check($request->password, $userInfo->password)){
                $request->session()->put('AdminLoggedUser', $userInfo);

                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
}
