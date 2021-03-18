@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <form method="get" action="search">
      @csrf

          <div class="form-group">
              <label for="search">search</label>
              <input type="search" class="form-control" name="search"/>
          </div>
       
       
          <button type="submit" class="btn btn-block btn-danger">Search user</button>
      </form>
</div>
  <table class="table">
    <thead>
    
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Adress</td>          
          <td>Phone</td>
          
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->uname}}</td>
            <td>{{$users->emailid}}</td>
            <td>{{$users->adress}}</td>
            <td>{{$users->mobile}}</td>
           
            <td class="text-center">
               <a href="edituser/{{$users->id}}" class="btn btn-primary btn-sm">Edit</a>
                
            </td>
            <td class="text-center">
               <a href="deleteuser/{{$users->id}}" class="btn btn-danger btn-sm">Delete</a>
                
            </td>
            
        </tr>
        @endforeach
    </tbody>
  </table>
  <span>
  {!! $user->links() !!}
<span>
<style>
.w-5{display:none}
</style>
<div>
@endsection