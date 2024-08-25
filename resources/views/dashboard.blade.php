@extends('layout')

@section('content')
<div class="container">


    <style>
        /* Center the modal vertically */
        .modal-dialog {
            display: flex;
            align-items: center;  /* Center vertically */
            min-height: 100vh;    /* Full screen height */
        }

        /* Adjust the position slightly lower */
        .modal-content {
            margin-top: 100px;    /* Adjust this value as needed */
        }

        .flex-container {
            display: flex;
        }

        .flex-child {
            flex: 1;
            border: 2px solid #FCF2F2;
        }

        .flex-child:first-child {
            margin-right: 20px;
        }
    </style>



    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="welcomeModalLabel">Welcome!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Welcome to your Dashboard, {{ auth()->user()->name }}!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var welcomeModal = new bootstrap.Modal(document.getElementById('welcomeModal'), {
                keyboard: false
            });
            welcomeModal.show();
        });
    </script>
    <section class="exams mb-5">
        <h2 class="mb-4 text-left">Upcoming Exams</h2>
        <div class="card">
            <div class="card-header">Upcoming Exams </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($exams as $exam)
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 rounded shadow-sm mb-2">
                            <div class="d-flex flex-column">
                                <h5 class="mb-1">{{ $exam['title'] }}</h5>
                                <small class="text-muted">Due: {{ $exam['due_date'] }}</small>
                            </div>
                            <div>
                                <a href="#" class="btn btn-outline-info">View Details</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-outline-info">View All Exams</a>
            </div>
        </div>
    </section>
    <!-- Courses Section -->
    <section class="courses mb-5">
        <h2 class="mb-4">Your Courses</h2>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">{{ $course['name'] }}</h3>
                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: {{ $course['progress'] }}%;" aria-valuenow="{{ $course['progress'] }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ $course['progress'] }}%
                                </div>
                            </div>
                            <p class="card-text">{{ $course['progress'] }}% Complete</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>



    <style>
.donut-container {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
}

.donut {
    display: inline-block;
    width: 60px;
    height: 60px;
    background-color: #fff;
    border-radius: 50%;
    border: 8px solid #08a00d;
    position: relative;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.donut::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 30px;
    height: 30px;
    background-color: #fff;
    border-radius: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.donut-label {
    margin-top: 8px;
    font-weight: bold;
    color: #0c0c0c;
    text-align: center;
}

    </style>

    <!-- Grades Section -->
    <section class="grades mb-5">
        <h2 class="mb-4 text-left">Recent Grades</h2>
        <div class="card">
            <div class="card-header">
                Recent Grades
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($grades as $grade)
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 rounded shadow-sm mb-2">
                            <div class="d-flex flex-column">
                                <h5 class="mb-1">{{ $grade['course'] }}</h5>
                            </div>
                            <div class="donut-container">
                                <div class="donut"></div>
                                <div class="donut-label">{{ $grade['grade'] }}</div>
                            </div>

                            <!--<span class="badge bg-success donut">{{ $grade['grade'] }}</span>-->
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>








    <section class="announcements mb-5">
        <h2 class="mb-4 text-left">Announcements</h2>
        <div class="card">
            <div class="card-header">
                Announcements
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($announcements as $announcement)
                        <li class="list-group-item d-flex justify-content-between align-items-start border-0 rounded shadow-sm mb-2">
                            <div class="d-flex flex-column">
                                <p class="mb-1">{{ $announcement['message'] }}</p>
                                <small class="text-muted">Posted on: {{ $announcement['date'] }}</small>
                            </div>
                            <span class="badge bg-info rounded-pill">{{ $announcement['type'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>




<div class="flex-container">
    <div class="flex-child 1">
        <section class="questions">
            <div class="card shadow-sm" style="max-width: 500px; width: 100%; border-radius: 10px; overflow: hidden;">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4 text-center">Submit Your Question</h2>
                    <form action="#" method="POST">
                        <div class="form-group mb-4">
                            <label for="question" class="form-label" style="font-weight: bold;">Your Question:</label>
                            <textarea id="question" name="question" rows="6" class="form-control" placeholder="Type your question here..." style="border-radius: 8px; border: 1px solid #ced4da;"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-info" style="background-color: #9cc4f0; border-color: #3f8bdb; border-radius: 8px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <div class="flex-child 2">
        <section class="feedback">
            <div class="card shadow-sm" style="max-width: 500px; width: 100%; border-radius: 10px; overflow: hidden;">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4 text-center">Submit Your Feedback</h2>
                    <form action="#" method="POST">
                        <div class="form-group mb-4">
                            <label for="feedback" class="form-label" style="font-weight: bold">Your Feedback</label>
                            <textarea name="feedback" id="feedback" rows="6" class="form-control" placeholder="Type your feedback...." style="border-radius: 8px; border: 1px solid #ced4da"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-info" style="background-color: #9cc4f0; border-radius: 8px">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.0.1/Chart.bundle.min.js"></script>



    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

     <!-- Logout Section
     <section class="logout mt-5">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </section>-->
</div>
@endsection
