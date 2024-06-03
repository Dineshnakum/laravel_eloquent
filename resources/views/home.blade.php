@extends('layout')

@section('title')
    ALL User Data
@endsection

@section('content')
<a href="{{ route('user.create') }}" class="btn btn-success">Add New User</a>
<br><br>
<table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        <th>View</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    @foreach ($users as $user )
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->city}}</td>
        <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm">View</a></td>
        <td>
            <form action="{{route('user.destroy', $user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
        <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Update</a></td>
    </tr>   
    @endforeach
</table>
@endsection