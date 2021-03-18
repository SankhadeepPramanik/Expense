<h1>profile </h1>
<h2>hello {{$logindata['emailid']}}</h2>
<a href="/logout">logout</a>
<a href="/createexpense">logout</a>
<a href="/expenseuser">expenselist</a>



@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Login
  </div>

  <div class="card-body">
    
   
    <h1>profile </h1>
<h2>hello {{$logindata['emailid']}}</h2>
<a href="/logout">logout</a>
<a href="/createexpense">logout</a>
<a href="/expenseuser">expenselist</a>

  </div>
</div>
@endsection
