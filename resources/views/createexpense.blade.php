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
    Add Expense
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
      <form method="post" action="createexpense">
      @csrf

          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          
         
          <div class="form-group">
              <label for="desc">Description</label>
              <input type="text" class="form-control" name="desc"/>
          </div>
    <div class="form-group">
    <select class="form-control" name="uid" id="uid">

    @foreach($user as $users)

    <option value="{{$users->id}}" >{{$users->emailid}}</option>
    @endforeach

      </select>
     </div>

     <div class="form-group">
     <label for="amount">categorytitle</label>
    <select class="form-control" name="cid" id="cid">

    @foreach($data as $datas)
    <option value="{{$datas->id}}" >{{$datas->cname}}</option>

    @endforeach

      </select>
     </div>


          <div class="form-group">
              <label for="amount">Amount</label>
              <input type="number" class="form-control" name="amount" min="0" max="100000000" step="0.00" value="0.00"/>
          </div>
          <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" name="date"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Add </button>
      </form>
  </div>
</div>
@endsection