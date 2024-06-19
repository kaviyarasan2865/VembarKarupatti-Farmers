<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Vembar Karupatti</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #ededed;
        }

        .sidenav,
        .list-group-item {
            background-color: rgb(132, 84, 28);
            color: rgb(255, 255, 255);
        }

        #wrapper {
            overflow-x: hidden;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: 0rem;
            transition: margin 0.5s;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            width: 100%;
        }

        #menu-toggle {
            cursor: pointer;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }

        #menu-icon {
            transition: transform 1s;
        }

        #wrapper.toggled #menu-icon {
            transform: rotate(180deg);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }

        /* Additional styles for the dropdown menu */
        .dropdown-menu {
            min-width: 200px;
        }

        #adminDropdown {
            cursor: pointer;
        }

        /* Adjustments for uniform spacing */
        .list-group-item {
            display: flex;
            align-items: center;
            padding: 0.5rem 1.25rem;
        }

        .list-group-item i {
            margin-right: 10px;
            width: 20px;
        }

        .card {
            background-image: url('card.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: rgb(255, 255, 255);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 3px 7px 8px rgba(9, 9, 9, 0.28);
        }

        .container {
            background-color: white;
            border-radius: 6px;
            padding: 20px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidenav" id="sidebar-wrapper">
            <div class="sidebar-heading">Admin Panel</div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="{{ route('add.product') }}" class="list-group-item list-group-item-action">
                    <i class="far fa-building"></i> Add Product
                </a>
                <a href="{{ route('view.products') }}" class="list-group-item list-group-item-action">
                    <i class="far fa-id-card"></i> Manage Product
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-users"></i> Orders
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fas fa-chalkboard-teacher"></i> Users
                </a>
                <a class="list-group-item list-group-item-action dropdown-toggle" href="#" id="cmsDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-tasks"></i> CMS
                </a>
                <div class="dropdown-menu" aria-labelledby="cmsDropdown">
                    <a class="dropdown-item" href="#">Home</a>
                    <a class="dropdown-item" href="#">Header</a>
                    <a class="dropdown-item" href="#">About</a>
                    <a class="dropdown-item" href="#">Footer</a>
                </div>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-upload"></i> kk
                </a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-default" id="menu-toggle">
                    <i id="menu-icon" class="fa fa-align-justify"></i>
                </button>

                <!-- Add the admin dropdown -->
                <div class="ml-auto dropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </nav>

            {{-- Dynamic contents --}}
            <div class="container">
                @if(View::hasSection('content'))
                    @yield('content')
                @else
                <div class="container-fluid">
                    <!-- Add your page content here -->
                    <div class="row">
                        <div class="col-lg-12" id="mainContent">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card" id="dcontent">
                                            <div class="card-body">
                                                <h5 class="card-title"
                                                    style="color: rgb(255, 255, 255); font-size: 20px; font-weight: bold">
                                                    Companies</h5>
                                                <p class="card-text">1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="card" id="dcontent">
                                            <div class="card-body">
                                                <h5 class="card-title"
                                                    style="color: rgb(255, 255, 255); font-size: 20px; font-weight: bold">
                                                    Students Active</h5>
                                                <p class="card-text">1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card" id="dcontent">
                                            <div class="card-body">
                                                <h5 class="card-title"
                                                    style="color: rgb(255, 255, 255); font-size: 20px; font-weight: bold">
                                                    Staffs</h5>
                                                <p class="card-text">1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Chart 1 -->
                            <canvas id="myChart" width="400" height="400"></canvas>
                            <br>

                            <center>
                                <p style="color:#997b7b">Number of Students and number of students eligible for
                                    companies</p>
                            </center>
                        </div>
                        <div class="col-md-6">
                            <!-- Chart 2 -->
                            <canvas id="myPieChart"></canvas>
                            <br>
                            <center>
                                <p style="color:#7b9993">Students Belonging to several departments</p>
                            </center>
                        </div>
                    </div>
                </div>

                <script src="{{ asset('js/chart.min.js') }}"></script>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Total Students', 'Eligible Students'],
                            datasets: [{
                                label: 'Number of Students',
                                data: [1, 1],
                                backgroundColor: [
                                    'orange',
                                    'lightgreen'
                                ],
                                borderColor: [
                                    'black',
                                    'black'
                                ],
                                borderWidth: 2
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
                {{-- piechart --}}

                <script>
                    var ctx = document.getElementById('myPieChart').getContext('2d');
                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['Department A', 'Department B', 'Department C', 'Department D', 'Department E'],
                            datasets: [{
                                label: 'Number of Students',
                                data: [10, 20, 30, 25, 15],
                                backgroundColor: [
                                    'yellow',
                                    'blue',
                                    'green',
                                    'purple',
                                    'red'
                                ],
                                borderColor: [
                                    'black'
                                ],
                                borderWidth: 2
                            }]
                        },
                        options: {
                            // Customize chart options if needed
                        }
                    });
                </script>

                @endif
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            $("#menu-icon").toggleClass("fa-align-right fa-arrow-right");
        });
    </script>
</body>

</html>

