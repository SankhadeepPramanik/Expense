<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Expense;
use App\Models\Category;
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $request->validate([
        'emailid'=>'required',
        'password'=>'required'
        ]);
        $uinfo=User::where('emailid','=',$request->emailid)->first();
       

        if(!$uinfo){
            return redirect('ulogin')->with('error','Invalid username/password!!');
        }
        else{
                if (Hash::check($request->password,$uinfo->password)){
                    if($uinfo->utype == 'admin'){
                       $request->session()->put('adata',$uinfo);
                    //    return $request->session()->get('adata');
                        return view('admindashbord');
                    } else{
                        $request->session()->put('udata',$uinfo->id);
                        return redirect('userdashbord');
                    }
                }else{
                    return redirect('ulogin')->with('error','Invalid username/password!!');
                    }
                
            }

    }


    function logout() {
        if(session()->has('udata')){
        session()->remove('udata');
        return  redirect('ulogin');
        }
          }
    function alogout() {
        if(session()->has('adata')){
            session()->remove('adata');
            return  redirect('ulogin');
        }
            }

          function login()
          {
              return view('ulogin');
          }

          public function edit($id)
          {
              $user = User::find($id);
              return view('editperuser', compact('user'));
          }
      
      public function update(Request $request, $id)
          {
              $updateData = $request->validate([
                  'uname' => 'required|max:255',
                  'emailid' => 'required|max:255',
                  'adress' => 'required',
                  'mobile' => 'required|numeric',
      
                  'password' => 'required|max:255',
              ]);
              
              User::whereId($id)->update($updateData);
              return redirect('userprofile')->with('completed', 'Student has been updated');
              }
              
              
              public function pppp()
              {
                //   $user = session()->get('adata');
                
                $user=Category::where('id','=',1)->get();

                  return $user;
                  exit;
              }





    }
