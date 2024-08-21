@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Courses</h2>
    <div class="row">
        @foreach($courses as $enrollment)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $enrollment->course->course_name }}</h5>
                        <p class="card-text">{{ $enrollment->course->course_description }}</p>
                        <a href="{{ route('courses.show', $enrollment->course->id) }}" class="btn btn-primary">Go to Course</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
