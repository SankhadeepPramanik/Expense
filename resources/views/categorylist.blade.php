@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

                
<div class="push-top">

<a href="createcategory" class="btn btn-success">add</a>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <form method="get" action="searchcategory">
      @csrf

          <div class="form-group">
              <label for="search">search</label>
              <input type="search" class="form-control" name="search"/>
          </div>
       
       
          <button type="submit" class="btn btn-block btn-danger">Search category</button>
      </form>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
          
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $categories)
        <tr>
            <td>{{$categories->id}}</td>
            <td>{{$categories->cname}}</td>
            <td>{{$categories->cdesc}}</td>
           
            <td class="text-center">
               <a href="editcategory/{{$categories->id}}" class="btn btn-primary btn-sm"">Edit</a>
                
            </td>
            <td class="text-center">
               <a href="deletecategory/{{$categories->id}}" class="btn btn-danger btn-sm"">Delete</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <span>
  {!! $category->links() !!}
<span>
<style>
.w-5{display:none}
</style>
<div>
@endsection