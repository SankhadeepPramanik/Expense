<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    function list()
    {
        $category = Category::latest()->paginate(5);
        return view('categorylist', compact('category'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $storeData = $request->validate([
            'cname' => 'required|max:255',
            'cdesc' => 'required|max:255',
           
        ]);
        $category = Category::create($storeData);

        return redirect('/categorylist')->with('completed', 'Student has been saved!');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('categorylist');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('editcategory', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'cname' => 'required|max:255',
            'cdesc' => 'required|max:255',
            
        ]);
        Category::whereId($id)->update($updateData);
        return redirect('categorylist')->with('completed', 'Student has been updated');

        }
        function search(Request $request)
        {
            $search=$request->input('search');
    
            $category = Category::where('cname','like','%'.$search.'%' )->orWhere('cdesc','like','%'.$search.'%')->paginate(5);
            return view('categorylist', compact('category'));
        }
}
