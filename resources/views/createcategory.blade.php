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
    Add category
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
      <form method="post" action="createcategory">
      @csrf

          <div class="form-group">
              <label for="cname">Name</label>
              <input type="text" class="form-control" name="cname"/>
          </div>
       
          <div class="form-group">
              <label for="cdesc">Decription</label>
              <input type="cdesc" class="form-control" name="cdesc"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create createcategory</button>
      </form>
  </div>
</div>
@endsection