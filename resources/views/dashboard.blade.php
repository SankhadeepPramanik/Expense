<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




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
        <button type="submit" class="btn btn-block btn-danger">login</button>
      </form>
  </div>
</div>
@endsection
