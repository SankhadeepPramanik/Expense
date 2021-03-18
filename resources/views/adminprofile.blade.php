@extends('layout1')

@section('content1')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">

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
            <td> {{Session::get('udata')['id']}}</td>
  
            <td class="text-center">
               <a href="edituser/{{$logindata['id']}}" class="btn btn-primary btn-sm">Edit</a>
                
            </td>
            
            
        </tr>

    </tbody>
  </table>

<div>
@endsection