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
            <td> {{Session.get('adata')['id']}}</td>
        
            <td class="text-center">
               
                
            </td>
            
            
        </tr>

    </tbody>
  </table>

<div>
@endsection