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
      <form method="post" action="{{ $category->id}}">
      @csrf
          <div class="form-group">
              <label for="cname">Name</label>
              <input type="text" class="form-control" name="cname" value="{{ $category->cname }}"/>
          </div>
       
          <div class="form-group">
              <label for="cdesc">Decription</label>
              <input type="cdesc" class="form-control" name="cdesc" value="{{ $category->cdesc }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">UpdateCategory</button>
      </form>
  </div>
</div>
@endsection