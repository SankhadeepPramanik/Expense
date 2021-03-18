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
    Add User
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
      <form method="post" action="createuser">
      @csrf

          <div class="form-group">
              <label for="uname">Name</label>
              <input type="text" class="form-control" name="uname"/>
          </div>
          <div class="form-group">
              <label for="emailid">emailid</label>
              <input type="email" class="form-control" name="emailid"/>
              <div class="form-group">
            
              <label for="adress">Name</label>
              <input type="text" class="form-control" name="adress"/>
          </div>
          </div>
          <div class="form-group">
              <label for="mobile">Phone</label>
              <input type="tel" class="form-control" name="mobile"/>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create User</button>
      </form>
  </div>
</div>
@endsection