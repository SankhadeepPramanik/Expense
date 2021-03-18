

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
<h1>welcome admin<h1>
  <div class="card-header">
  @if ($data ?? '')
    <h1>Total member : {{$data ?? ''}}</h1>
  @endif



  </div>



 
  </div>
</div>
@endsection

