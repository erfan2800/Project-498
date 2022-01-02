<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Variable;

class MainController extends Controller
{
    public function home(){
        $data = Post::where('post.status', 1)->join('admins', 'admins.id', '=', 'post.userId')
            ->select('admins.name', 'post.text','post.photo')
            ->orderBy('post.created_at', 'desc')->get();
        Log::info($data);
        return view('Layout.index', compact('data'));
    }
    function login(){
        return view('Layout.login');
    }
    function registerStudent(){
        return view('Layout.registerStudent');
    }
    function registerTeacher(){
        return view('Layout.registerTeacher');
    }
    function editProfile(){
        return view('Layout.editProfile');
    }
    function profile(){
        return view('Layout.profile');
    }
    function classLink(){
        return view('Layout.classLink');
    }
    function notice(){
        return view('Layout.notice');
    }
    function resetPassword(){
        return view('Layout.resetPassword');
    }

    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);
        //Insert data into database
        $admin = new  Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->stdId){
            $admin->stdId = $request->stdId;
        }

        $admin->password = Hash::make($request->password);


        $save = $admin->save();

        if ($save){
            return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
//for login

    public function update(Request $request){
//    return view('Layout.update');
//    Log::info($request->all());
        $name = '';
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/photos');
            $image->move($destinationPath, $name);
        }
        $update = Admin::where('id', $request->id)->update([
            'fatherName'=> $request->fatherName,
            'motherName'=> $request->motherName,
            'dateOfBirth'=> $request->dateOfBirth,
            'gender'=> $request->gender,
            'address'=> $request->address,
            'batch'=> $request->batch,
            'phone'=> $request->phone,
            'department'=> $request->department,
            'bio'=> $request->bio,
            'photo'=> $name,
        ]);
        if ($update){
            return view('Layout.editProfile');
        }
        if ($update){
            return 'Not success';
        }
    }
    public function forgetPassword(Request $request){

        Log::info($request->all());
        $forgetPassword=Admin::where('email', $request->email)->first();
        if ($forgetPassword){
            return view('Layout.resetPassword', compact('forgetPassword'));
        }
        else {
            return 'Email not found';
        }
    }
    public function updatePassword(Request $request){
        $updatePass = Admin::where('id', $request->id)->update(['password' => Hash::make($request->password)]);
        $login = "Reset Password successful.";
        if ($updatePass){
            return view('Layout.login', compact('login'));
        }
        else {
            return 'Password not update';
        }
    }

    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $userInfo = Admin::where('email','=', $request->email)->where('status', 1)->first();
        if (!$userInfo){
            return back()->with('fail', 'We do not recognize your email address. or contact with admin.');
        }else{

            if (Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo);

                return redirect('/');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
}
