@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Profile</h2>

    <div class="card">
        <div class="card-header">
            Profile Information
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <!-- Add other profile fields as needed -->
            <a href="{{ route('profile.edit') }}" class="btn btn-success">Edit Profile</a>
        </div>
    </div>
</div>
@endsection
