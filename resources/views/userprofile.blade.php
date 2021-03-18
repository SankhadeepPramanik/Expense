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
 
</div>
  <table class="table">
    <thead>
    
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Adress</td>          
          <td>Phone</td>
          
         
        </tr>
    </thead>
    <tbody>

        <tr>
            <td> {{$logindata['id']}}</td>
            <td>{{$logindata['uname']}}</td>
            <td> {{$logindata['emailid']}}</td>
            <td>o{{$logindata['adress']}}</td>
            <td>o{{$logindata['mobile']}}</td>
            <td class="text-center">
               <a href="editperuser/{{$logindata['id']}}" class="btn btn-primary btn-sm">Edit</a>
                
            </td>
            
            
        </tr>

    </tbody>
  </table>

<div>
@endsection