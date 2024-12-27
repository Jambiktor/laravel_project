<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7fc;
    }

    .navbar {
        background-color: #333;
        height: 50px;
    }

    .navbar-brand {
        color: #eeedef;
    }

    .navbar-nav .nav-link {
        color: white;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card-body {
        padding: 20px;
    }

    h1,
    h3 {
        font-weight: bold;
    }

    .btn {
        border-radius: 20px;
        padding: 12px 20px;
        font-size: 1.2rem;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn:hover {
        opacity: 0.8;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }

    .time-section {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .time-section button {
        width: 180px;
    }

    .time-section div {
        font-size: 1.1rem;
        color: #333;
        margin-top: 10px;
        font-weight: bold;
    }

    .footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        width: 100%;
        bottom: 0;
    }
    </style>
    <script>
    function recordTime(action) {
        const currentTime = new Date().toLocaleString();
        const timeElement = document.getElementById(action + "-time");
        timeElement.textContent = action.charAt(0).toUpperCase() + action.slice(1) + " Time: " + currentTime;
    }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Employee Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Attendance History</h5>
                        <p class="card-text">View your attendance records.</p>
                        <a href="/attendance" class="btn btn-primary">Go to Attendance</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">My Profile</h5>
                        <p class="card-text">View and edit your profile details.</p>
                        <a href="/profile" class="btn btn-success">Go to Profile</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="time-section mt-4">
            <h3 class="text-center">Work Hours</h3>
            <div class="d-flex justify-content-center">
                <button class="btn btn-success m-2" onclick="recordTime('time-in')">Time In</button>
                <button class="btn btn-danger m-2" onclick="recordTime('time-out')">Time Out</button>
            </div>
            <div id="time-in-time" class="text-center"></div>
            <div id="time-out-time" class="text-center"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>