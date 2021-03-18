@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
<a href="createexpense" class="btn btn-success">add</a>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <form method="get" action="searchexpense">
      @csrf

          <div class="form-group">
              <label for="search">search</label>
              <input type="search" class="form-control" name="search"/>
          </div>
       
       
          <button type="submit" class="btn btn-block btn-danger">Search expense</button>
      </form>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>title</td>
          <td>desc</td>
          <td>uid</td>

          <td>amount</td>
          <td>date</td>
          

          <td class="text-center">Action</td>
          <td class="text-center"></td>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $expenses)
        <tr>
    
            <td>{{$expenses->title}}</td>
            <td>{{$expenses->desc}}</td>
            <td>{{$expenses->uid}}</td>
            <td>{{$expenses->amount}}</td>
            <td>{{$expenses->date}}</td>
            <td class="text-center">
               <a href="editexpense/{{$expenses->id}}"class="btn btn-primary btn-sm">Edit</a>
                
            </td>
            <td class="text-center">
               <a href="deleteex/{{$expenses->id}}" class="btn btn-danger btn-sm">Delete</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
    <span>
 
<div>

  <span>
  {!! $user->links() !!}
<span>
<style>
.w-5{display:none}
</style>
@endsection