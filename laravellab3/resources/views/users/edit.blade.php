@extends('layouts.main')
@section('title','Edit user')

@section('content')
<form method="POST" action="{{ route('users.update' , $user->id)}}" class="form-floating w-50 mx-auto mt-5">
    @csrf
    @method('PUT')
    <h2 class="mb-4">Edit exists user</h2>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" placeholder="Your name" value="{{ $user->name }}" name="name">
        <label for="name">Your name</label>
      </div>

    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" placeholder="Email address" value="{{ $user->email }}" name="email">
        <label for="email">Email address</label>
      </div>

        <input type="submit" value="Edit" class="btn btn-success">
  </form>
@endsection
