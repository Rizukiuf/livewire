@extends('layouts.master')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <a href="{{ route('users.index') }}" class="text-primary">Back</a>
        <h1>Edit User</h1>
        <div class="row">
            <div class="col-md-6">
                @livewire('user-edit', ['user' => $user])
            </div>
        </div>
    </div>
@endsection