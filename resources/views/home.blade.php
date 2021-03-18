

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
  <h1>Hello</h1>
  </div>

  <div class="card-body">
  <table border = 1>
<tr>
<td> Year</td>
<td> Month</td>
<td> Amount</td>
</tr>
@foreach ($users as $user)
<tr>
<?php $monthNum = $user->month;
$dateObj = DateTime::createFromFormat('!m', $monthNum);
$monthName = $dateObj->format('F');?>
<td>{{ $user->year}}</td>
<td>{{ $monthName }}</td>
<td>{{ $user->total_amount }}</td>
</tr>
@endforeach
</table>

 
  </div>
</div>
@endsection
