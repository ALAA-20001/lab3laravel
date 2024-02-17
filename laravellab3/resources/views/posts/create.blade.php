@extends('layouts.main')

@section('title', 'Create post')
@section('content')


<form method="POST" action="{{ route('posts.store') }}" class="form-floating w-50 mx-auto mt-5">
    @csrf

    <h2 class="mb-4">Create new post</h2>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        <label for="title">Title</label>
      </div>

      <div class="form-floating mb-3">
        <textarea name="body" id="body" class="form-control" placeholder="Body" style="height:200px; resize:none;"></textarea>
        <label for="body">Body</label>
      </div>

       <select class="form-select p-0 ps-3" name="user_id" aria-label="Default select example">
        <option selected>Select post writer</option>
        @foreach($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach

      </select>


        <input type="submit" value="Submit" class="btn btn-success mt-3">
  </form>
@endsection
