@extends('layouts.main')
@section('title', 'Show post')

@section('content')
<div class="mx-auto w-50 mt-3">
    <h2 class="w-50">Show post No. {{ $post->id}}:</h2>
<table class="table mt-3 table-bordered">

    <tbody>

        <tr>
            <td>ID:</td>
            <td>{{ $post->id}}</td>

        </tr>
        <tr>
            <td>Title:</td>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <td>Body:</td>
            <td>{{ $post->body }}</td>
        </tr>
        <tr>
            <td>Published at:</td>
            <td>{{ $post->published_at }}</td>
        </tr>
        <tr>
            <td>Writer name:</td>
            <td>{{ $post->user->name }}</td>
        </tr>

    </tbody>
</table>
</div>

@endsection
