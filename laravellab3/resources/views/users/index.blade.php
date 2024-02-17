@extends('layouts.main')


@section('title', 'Users List')


@section('content')
<table class="table text-center container">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Posts count</th>
        <th>Actions</th>
    </thead>
    <tbody>
       @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td><a href="{{ route('users.show', $user->id) }}" class="text-decoration-none">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->posts_count }}</td>
            <td>
                <a href="{{ route('users.edit' , $user->id) }}" class="btn btn-primary">Edit</a>
                <form class="d-inline" action="{{ route('users.destroy', $user->id) }}" method="POST">
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
    {{ $users->links() }}
   </div>
@endsection

