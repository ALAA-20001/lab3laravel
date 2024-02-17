@extends('layouts.main')
@section('title','Edit post')

@section('content')
<form method="POST" action="{{ route('posts.update' , $post->id)}}" class="form-floating w-50 mx-auto mt-5">
    @csrf
    @method('PUT')
    <h2 class="mb-4">Edit exists post</h2>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}" name="title">
        <label for="title">Title</label>
      </div>

      <div class="form-floating mb-3">
        <textarea name="body" id="body" class="form-control" placeholder="Body" style="height:200px;">{{ $post->body }}</textarea>
        <label for="body">Body</label>
      </div>

      <select class="form-select p-0 ps-3" name="user_id" aria-label="Default select example">
        <option value="{{ $post->user->id }}">{{ $post->user->name }}</option>
        @foreach($users as $user)
        @if($user->id !== $post->user->id)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endif
        @endforeach
      </select>



        <input type="submit" value="Edit" class="btn btn-success mt-3">
  </form>
@endsection
