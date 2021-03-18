<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Expense;

class UserController extends Controller
{

    function ulist()
    {
        $user = User::latest()->paginate(5);
        return view('userlist', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function store(Request $request)
    {
        $request->validate([
            'uname' => 'required|max:255',
            'emailid' => 'required|max:255',
            'adress' => 'required',
            'mobile' => 'required|numeric',

            'password' => 'required|max:255',
        ]);
        $user = User::create([
            'uname'=>$request->uname,
            'emailid'=>$request->emailid,
            'adress'=>$request->adress,
            'mobile'=>$request->mobile,

            'password'=>Hash::make($request->password),
        ]);

        return redirect('/createuser')->with('completed', 'Student has been saved!');
    }

 public function edit($id)
    {
        $user = User::find($id);
        return view('edituser', compact('user'));
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
        return redirect('userlist')->with('completed', 'Student has been updated');
        }
        
        
        
        
        public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('userlist');
    }






    function submit_login(Request $request){
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


    function dashbord()
    {
       //$data=['logindata'=>User::where('id','=',session('udata'))->first()];
        $id=session()->get('udata');
       // $user=Expense :: find($data1);  
       //printf_r($id);  
        $user = Expense::where('uid', '=', $id)->paginate(5);

        return view('calculate', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
        //  print_r($id);
        // print_r($user);
        //where(['email'=>$request->username])
        // return view('calculate', compact('user'));
        // return view('userdashbord', $data);
        //->with('i', (request()->input('page', 1) - 1) * 5)
    }

    function totalexpense()
    {
        $data=['logindata'=>User::where('id','=',session('udata'))->first()];

        $user = Expense::find($data);

        return view('userdashbord', $data);

    }

    public function expensedelete($id)
    {
        $expense = Expense::find($id);
        $expense->delete();

        return redirect('home');
    }

    static function mexpense()
    {
       // $data=['logindata'=>User::where('id','=',session('udata'))->first()];
    $id=session()->get('udata');
   
print_r($id);

    //    return  Expense::where('uid', '=', $id)->sum('amount');
    $users = DB::select('SELECT 
        year(date) as year, 
        month(date) as month, 
        sum(amount) as total_amount 

        From expenses 
            WHERE uid='.$id.' 
            GROUP BY year(date), month(date)'
    );

//     $users = DB::table('expenses')
//     ->select(year('date'), month('date'))
//     ->groupByRaw(year('date'), month('date'))->sum('amount')
//     ->where('uid', '=', $id);

// print_r($users);
    return view('home',['users'=>$users]);
    

    }

    function search(Request $request)
    {
        $search=$request->input('search');

        $user = User::where('uname','like','%'.$search.'%' )->orWhere('emailid','like','%'.$search.'%')->paginate(5);
        return view('userlist', compact('user'));
    }

    function searchu(Request $request)
    {


        $id=session()->get('udata');
        $uinfo=User::where('id','=',$id)->first();
        // $user=Expense :: find($data1);   
        if($uinfo){
        
        $search=$request->input('search');

        $user = Expense::where('desc','like','%'.$search.'%' )->orWhere('date','like','%'.$search.'%')->paginate(5);
        return view('calculate', compact('user'));
    }

    }
 
    function profile()
    {
       $data=['logindata'=>User::where('id','=',session('udata'))->first()];
        return view ('userprofile',$data);

    }
    function count(){
    // $userid=Session::get('udata')['id'];
    $data= User::all()->count();
        return view('admindashbord',['data'=>$data]);
    }
    static function usercount()
    {
        return   DB::select('SELECT 
        count(id) from users');

    }

    }
