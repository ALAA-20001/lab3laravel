@extends('layouts.main')
@section('title', 'Show user')

@section('content')
<div class="row mt-3">
    <div class="col md-6">
    <h2 class="w-50">Show user No. {{ $user->id}}:</h2>

<table class="table mt-3 table-bordered">

    <tbody>

        <tr>
            <td>ID:</td>
            <td>{{ $user->id}}</td>

        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Posts counts:</td>
            <td>{{ $user->posts_count }}</td>
        </tr>

    </tbody>
</table>
</div>
<div class="col md-6 ">
    <h2 class="w-50">User posts:</h2>
    <div class="border px-3">
<table class="table mt-3 table-bordered">
    <tbody>

        @if(count($posts) >= 1)
        @foreach ($posts as $post)
        <tr>
            <td>Title:</td>
            <td>{{$post->title}}</td>

        </tr>
        <tr>
            <td>Body:</td>
            <td>{{ $post->body }}</td>
        </tr>
        @endforeach
        @else
        <p class="text-danger d-flex justify-content-center align-items-center m-0 mt-4">No Posts for this user to be displayed.</p>
        @endif
    </tbody>

</table>
<div class="d-flex justify-content-center mt-3">
    {{ $posts->links() }}
</div>
</div>
</div>
</div>

@endsection
