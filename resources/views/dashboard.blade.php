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


    <script>
        const ctx = document.getElementById("chart").getContext('2d');
        const myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ["rice", "yam", "tomato", "potato",
            "beans", "maize", "oil"],
            datasets: [{
              label: 'food Items',
              backgroundColor: 'rgba(161, 198, 247, 1)',
              borderColor: 'rgb(47, 128, 237)',
              data: [300, 400, 200, 500, 800, 900, 200],
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true,
                }
              }]
            }
          },
        });
  </script>
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
                            <span class="badge bg-success rounded-pill">{{ $grade['grade'] }}</span>
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



     <!-- Logout Section
     <section class="logout mt-5">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </section>-->
</div>
@endsection
