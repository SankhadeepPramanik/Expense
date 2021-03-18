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
    Edit & Update
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
      <form method="post" action="{{ $user->id }}">
      @csrf
          <div class="form-group">
            
              <label for="uname">Name</label>
              <input type="text" class="form-control" name="uname" value="{{ $user->uname }}"/>
          </div>
          <div class="form-group">
              <label for="emailid">Email</label>
              <input type="email" class="form-control" name="emailid" value="{{ $user->emailid}}"/>
          </div>
          <div class="form-group">
            
            <label for="adress">Adress</label>
            <input type="text" class="form-control" name="adress" value="{{ $user->adress }}" required/>
        </div>
          <div class="form-group">
              <label for="mobile">Phone</label>
              <input type="tel" class="form-control" name="mobile" value="{{ $user->mobile }}"/>
          </div>
          <div class="form-group">
              
              <input type="hidden" class="form-control" name="password" value="{{ $user->password }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection