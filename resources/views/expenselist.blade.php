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
  <form method="get" action="searchexpenses">
      @csrf

          <div class="form-group">
              <label for="search">search</label>
              <input type="search" class="form-control" name="search"/>
          </div>
       
       
          <button type="submit" class="btn btn-block btn-danger">Search user</button>
      </form>
  <table class="table">
    <thead>
        <tr class="table-warning">
        <td>eid</td>

          <td>title</td>
          <td>desc</td>
          <td>uid</td>
          <td>cid</td>          
          <td>amount</td>
          <td>date</td>
        </tr>
    </thead>
    <tbody>
        @foreach($expense as $expenses)
        <tr>
        <td>{{$expenses->id}}</td>

            <td>{{$expenses->title}}</td>
            <td>{{$expenses->desc}}</td>
            <td>{{$expenses->uid}}</td>
            <td>{{$expenses->cid}}</td>
            <td>{{$expenses->amount}}</td>
            <td>{{$expenses->date}}</td>
            
                 
            </td>
            <td class="text-center">
               <a href="editexpense/{{$expenses->id}}" class="btn btn-primary btn-sm">edit</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <span>
  {!! $expense->links() !!}
<span>
<style>
.w-5{display:none}
</style>
<div>
@endsection