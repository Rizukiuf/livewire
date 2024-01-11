@extends('layouts.master')

@section('content')
    <div class="container">
        <a href="{{ route('users.index') }}" class="text-primary">Back</a>
        <h1>Data of User</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled>
        </div>
        <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" class="form-control" value="{{ $user->id }}" disabled>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" value="{{ $user->email }}" disabled>
        </div>
    </div>
@endsection