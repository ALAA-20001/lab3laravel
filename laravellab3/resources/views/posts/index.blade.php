@extends('layouts.main')


@section('title', 'Posts List')


@section('content')
<table class="table text-center ">
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Slug</th>
        <th>Body</th>
        <th>Published at</th>
        <th>Writer name</th>
        <th>Actions</th>
    </thead>
    <tbody>
@foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td><a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">{{ $post->title }}</a></td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->body }}</td>
            <td>{{ $post->published_at }}</td>
            <td>{{ $post->user->name }}</td>

            <td>
                <a href="{{ route('posts.edit' , $post->id) }}" class="btn btn-primary">Edit</a>
                <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
            <td></td>
        </tr>
       @endforeach

    </tbody>
</table>
<div class="d-flex justify-content-center mt-3">
    {{ $posts->links() }}
   </div>
@endsection

