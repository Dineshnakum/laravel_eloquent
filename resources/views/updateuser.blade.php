@extends('layout')

@section('title')
    Update user data
@endsection

@section('content')
    <form action="{{route('user.update', $users->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control" value="{{$users->name}}">
        </div>
        <div class="mb-3">
            <label for="useremai" class="form-label">User Email</label>
            <input type="email" value="{{$users->email}}" name="useremail" class="form-control">
        </div>
        <div class="mb-3">
            <label for="userage" class="form-label">User Age</label>
            <input type="text" value="{{$users->age}}" name="userage" class="form-control">
        </div>
        <div class="mb-3">
            <label for="usercity" class="form-label">User City</label>
            <input type="text" value="{{$users->city}}" name="usercity" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit"  value="Save" class="btn btn-success">
        </div>
    </form>
@endsection