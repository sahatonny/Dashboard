<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>
    
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
.progress {
    background-color: #CCE5FF;
    height: 10px;
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
        </nav>

    </header>




    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 p-3">
                <div class="profile text-center mb-4">
                    <img src="images/girl.jpg" alt="Profile Picture" class="img-fluid rounded-circle mb-2">
                    <h3>{{ auth()->user()->name }}</h3>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Subscription</a>
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
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
            </aside>


            <main class="col-md-9 col-lg-10 p-4">

                <div class="container">
                    <h3 class="text-center mt-4">Exam Results Overview</h3>
                    <div id="donut-chart"> </div>
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
                        <h6 class="text-center" >This is your test score percentage till now.</h6>
                    </div>




                @yield('content')
            </main>
        </div>
    </div>


    <footer>
        <p>&copy; 2024 LMS Platform. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
