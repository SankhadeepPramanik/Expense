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
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="POST">
        @csrf
        @if(Session::get('fail'))
      <div class="alert alert-secondary" role="alert">
{{Session::get('fail')}}
</div>
@endif
        <div class="form-group">
            <label for="emailid">EmailId</label>
            <input type="text" class="form-control" name="emailid" id="emailid" required>
        </div>
      
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" id="password"required>
        </div>
        <div class="form-group">
            <label for="utype">utype</label>
            <input type="utype" class="form-control" name="utype" id="utype"required>
        </div>
        <button type="submit" class="btn btn-block btn-danger">admin login</button>
      </form>
  </div>
</div>
@endsection