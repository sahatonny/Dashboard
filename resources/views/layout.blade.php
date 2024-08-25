<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>


<style>
                        body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #FCF2F2;
                }

                    header {
                    background-color: #fff;
                    padding: 1rem;
                    color: #fff;
                    text-align: center;
                }


                nav  {
                        color: #ee8484;
                }

                    header nav ul {
                    list-style: none;
                    background-color: #fff;
                    padding: 0;
                    margin: 0;
                    display: flex;
                    justify-content: center;
                }

                    header nav ul li {
                    margin: 0 1rem;
                    color: #fff;
                }

                    header nav ul li a {
                    color: #fff;
                    text-decoration: none;
                }
                .sidebar {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 200px;
                    height: 100%;
                    background-color: #f4f4f4;
                    padding: 15px;
                    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
                }

                aside {
                    width: 250px;
                    padding: 1rem;
                    background-color: #e9edf0;
                    color: #f3ebeb;
                    height: 100vh;
                }

                aside .profile img {
                    border-radius: 50%;
                    width: 100px;
                    height: 100px;
                }

                aside ul {
                    list-style: none;
                    background-color: #e9eef3;
                    padding: 0;
                }

                aside ul li {
                    margin: 1rem 0;

                }

                aside ul li a {
                    color: #fff;
                    text-decoration: none;
                }
</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('dashboard') }}" target="_self"> LMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Exams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Grades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="\profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    </li>
                    </ul>
                </div>
            </div>
        </nav></header>




    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-4 col-lg-2 p-4">
                <div class="profile text-center mb-4">
                    <img src="images/girl.jpg" alt="Profile Picture" class="img-fluid rounded-circle mb-2">
                    <h3>Hello, {{ auth()->user()->name }}!</h3>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pdfs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Exams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Grades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="/fullcalender">Calender</a>
                    </li>-->

                </ul>


            </aside>



            <main class="col-md-10 col-lg-10 p-4">

            <div class="flex" width="100" >

                    <h3 class="text-center mt-4">Exam Results Overview</h3>
                    <div id="donut-chart" class="flex" height="65"> </div>
                        <script>
                            let chart = bb.generate({
                            data: {
                                columns: [
                                    ["Correct", 10],
                                    ["Inorrect", 6],
                                    ["Not answered", 4],

                                ],
                                type: "donut",
                                onclick: function (d, i) {
                                    console.log("onclick", d, i);
                                },
                                onover: function (d, i) {
                                    console.log("onover", d, i);
                                },
                                onout: function (d, i) {
                                    console.log("onout", d, i);
                                },
                            },
                            donut: {
                                title: "percentage",
                            },
                            bindto: "#donut-chart",
                            });
                        </script>
                        <h6 class="text-center"  style="color: #5a5a5a; font-weight: bold; font-size: 16px; margin-bottom: 20px;">This is your test score percentage till now.</h6>
            </div>
            <div class="flex" width="100">
                        <h3 class="text-center mt-4">Total Score Overview</h3>
                        <canvas id="myBarChart" height="65"></canvas>
                        <script>
                            new Chart(document.getElementById('myBarChart').getContext('2d'), {
                                type: 'bar',
                                data: {
                                    labels: ['January', 'February', 'March', 'April','May'],
                                    datasets: [{
                                        label: 'Score 2024',
                                        data: [30, 70, 80, 60, 90],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.1)',
                                            'rgba(54, 162, 235, 0.1)',
                                            'rgba(255, 206, 86, 0.1)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: { beginAtZero: true }
                                    }
                                }
                            });
                        </script>
            </div>
                        <h6 class="text-center" style="color: #5a5a5a; font-weight: bold; font-size: 16px; margin-bottom: 20px;">
                            This is your total score by month till now.
                        </h6>

            <div class="flex" width="100">
                    <div>
                        <canvas id="myHorizontalBarChart" width="400" height="100"></canvas>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var ctx = document.getElementById('myHorizontalBarChart').getContext('2d');
                            var myHorizontalBarChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                    datasets: [{
                                        label: 'Sales',
                                        data: [65, 59, 80, 81, 56, 55, 40],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)', // January
                                            'rgba(54, 162, 235, 0.2)', // February
                                            'rgba(255, 206, 86, 0.2)', // March
                                            'rgba(75, 192, 192, 0.2)', // April
                                            'rgba(153, 102, 255, 0.2)', // May
                                            'rgba(255, 159, 64, 0.2)', // June
                                            'rgba(199, 199, 199, 0.2)'  // July
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)', // January
                                            'rgba(54, 162, 235, 1)', // February
                                            'rgba(255, 206, 86, 1)', // March
                                            'rgba(75, 192, 192, 1)', // April
                                            'rgba(153, 102, 255, 1)', // May
                                            'rgba(255, 159, 64, 1)', // June
                                            'rgba(199, 199, 199, 1)'  // July
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    indexAxis: 'y', // This makes the chart horizontal
                                    scales: {
                                        x: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        });
                    </script>
            </div>


            <div class="flex" width="100">


                    <div>
                        <canvas id="myHorizontalBarChart" width="400" height="80"></canvas>
                    </div>
                    <script>
                            document.addEventListener('DOMContentLoaded', function () {
                             var ctx = document.getElementById('myHorizontalBarChartWithNegatives').getContext('2d');
                            var myHorizontalBarChartWithNegatives = new Chart(ctx, {
                             type: 'bar',
                             data: {
                             labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                             datasets: [{
                             label: 'Net Profit',
                             data: [65, -59, 80, -81, 56, 55, -40], // Include negative values
                             backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // January
                        'rgba(54, 162, 235, 0.2)', // February
                        'rgba(255, 206, 86, 0.2)', // March
                        'rgba(75, 192, 192, 0.2)', // April
                        'rgba(153, 102, 255, 0.2)', // May
                        'rgba(255, 159, 64, 0.2)', // June
                        'rgba(199, 199, 199, 0.2)'  // July
                     ],
                        borderColor: [
                        'rgba(255, 99, 132, 1)', // January
                        'rgba(54, 162, 235, 1)', // February
                        'rgba(255, 206, 86, 1)', // March
                        'rgba(75, 192, 192, 1)', // April
                        'rgba(153, 102, 255, 1)', // May
                        'rgba(255, 159, 64, 1)', // June
                        'rgba(199, 199, 199, 1)'  // July
                        ],
                     borderWidth: 1
                     }]
                     },
                        options: {
                         indexAxis: 'y', // This makes the chart horizontal
                        scales: {
                          x: {
                        beginAtZero: true, // Ensures that the x-axis starts at zero
                        ticks: {
                            callback: function(value, index, values) {
                                return value + ' units'; // Adds 'units' to each tick label (optional)
                                 }
                                 }
                               }
                              }
                             }
                             });
                                });
                    </script>
                </div>

                <div class="flex" width="100">
                    <div >
                    <canvas id="examChart" width="800" height="100"></canvas>
                    </div>
                        <script>
                        const ctx = document.getElementById('examChart').getContext('2d');
                        const examChart = new Chart(ctx, {
                          type: 'line',
                              data: {
                          labels: ['Bangla(35)','English(35)','Math(40)', 'Science(15)', 'GK(50)', 'ICT(15)', 'Geography(10)'],
                           datasets: [
                             {
                                label: 'Previous Exam',
                                data: [25, 35, 30, 2, 45, 6, 8],
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderWidth: 1,
                                        },
                                        {
                                            label: 'Recent Exam',
                                            data: [30, 20, 35, 14, 29, 12, 6],
                                            borderColor: 'rgba(255, 99, 132, 1)',
                                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                            borderWidth: 1,
                                        }
                                    ]
                                },
                                options: {
                                    scales: {
                                        x: {
                                            beginAtZero: true
                                        },
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }

                            });
                            </script>
                </div>




                @yield('content')
            </main>
        </div>
    </div>


    <footer>
        <p>&copy; 2024 LMS Platform. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ mix('js/chart.js') }}"></script>

</body>
</html>
