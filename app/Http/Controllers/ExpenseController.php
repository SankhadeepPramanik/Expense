<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Expense;

class ExpenseController extends Controller
{
  
  function show()
  {
    $user = User::all();
      $data = Category::all();
      
      return view('createexpense', compact('data','user'));;
  }

  function list()
  {
      $category = Category::all();
      return view('categorylist', compact('category'));;
  }

  
  public function store(Request $request)
  {
      $storeData = $request->validate([
          'title' => 'required|max:255',
          'desc' => 'required|max:255',
          'desc' => 'required|max:255',
          'uid' => 'required|max:255',
          'cid' => 'required|max:255',


          'amount' => 'required|',
          'date' => 'required|max:255',

      ]);
      $expense = Expense::create($storeData);

      return redirect('/createexpense')->with('completed', 'Student has been saved!');
  }
  function elist()
  {
      $expense = Expense::latest()->paginate(5);;
      return view('expenselist', compact('expense'))->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function edit($id)
  {
    $user = User::all();
    $data = Category::all();
    
      $expense = Expense::find($id);
      return view('editexpense', compact('expense','data','user'));
  }

  public function update(Request $request, $id)
  {
      $updateData = $request->validate([
        'title' => 'required|max:255',
          'desc' => 'required|max:255',
          'uid' => 'required',
          'cid' => 'required',
          'amount' => 'required|max:255',
          'date' => 'required|max:255',
      ]);
      Expense::whereId($id)->update($updateData);
      return redirect('userdashbord')->with('completed', 'Student has been updated');

      }


  public function calculate($id)
  {
      $expense = Expense::find($id);
      return view('calculate', compact('expense'));

  }

  function search(Request $request)
        {
              $id=$request->Session()->get('udata');
              
            // print_r($uid);
            // exit;
            $search=$request->input('search');
    
            $user = Expense::where('uid','=',$id)->where(function($query) use ($search){
                $query->where('desc', 'LIKE', '%'.$search.'%')
                ->orWhere('title', 'LIKE', '%'.$search.'%')
                ->orWhere('amount', 'LIKE', '%'.$search.'%');
             })->paginate(5);
            return view('calculate', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
            




            // $uinfo=User::where('id','=',$id)->first(); 
            // ->where(function($query) use ($search){
                            // $query->where('first_name', 'LIKE', '%'.$search.'%')
                            // ->orWhere('last_name', 'LIKE', '%'.$search.'%')



        }

        function searche(Request $request)
        {
            $search=$request->input('search');
    
            $expense = Expense::where('desc','like','%'.$search.'%' )->orWhere('date','like','%'.$search.'%')->paginate(5);
            return view('expenselist', compact('expense'))->with('i', (request()->input('page', 1) - 1) * 5);
        }



      // $utype=$request->Session()->get('adata')['utype'];
}
