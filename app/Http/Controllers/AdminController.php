<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Expense;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function registration(Request $request)
    {
        $request->validate([
           
            'emailid' => 'required|max:255',
            'password' => 'required|max:255',
            'utype' => 'required',
        ]);
        $user = Admin::create([
         
            'emailid'=>$request->emailid,
            'password'=>Hash::make($request->password),
            'utype'=>$request->utype,
        ]);

        return redirect('/adminlogin')->with('completed', 'Student has been saved!');
    }

    function login(Request $request){
        // print_r($request->emailid);
        $request->validate([
            'emailid'=>'required',
            'password'=>'required'
            ]);
            if($userCheck=User::where(['emailid'=>$request->emailid])->first()){
                // print_r($userCheck->emailid);
                if (Hash::check($request->password,$userCheck->password)){
                    session(['adminData'=>$userCheck]);
                    return redirect('userdashbord');
                }else{
                    return redirect('ulogin')->with('error','Invalid emailid/password!!');
            }
        }
    }

}
