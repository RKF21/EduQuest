<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: web.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduQuest Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
        .navbar-light .navbar-nav .nav-link {
            color: black;
        }
        .card {
            background-color: #1e1e1e;
            border: none;
        }
        .card-title, .card-text {
            color: #ffffff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">EduQuest</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="coursesDropdown">
                        <a class="dropdown-item" href="#">Course 1</a>
                        <a class="dropdown-item" href="#">Course 2</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="classDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Class
                    </a>
                    <div class="dropdown-menu" aria-labelledby="classDropdown">
                        <a class="dropdown-item" href="#">Class 1</a>
                        <a class="dropdown-item" href="#">Class 2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Welcome to EduQuest</h1>
        <h2>Courses</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Python Tutorials - 100 Days of Code</h5>
                        <p class="card-text">Python is one of the most demanded programming languages in the job market. Surprisingly, it is equally easy to learn and master Python. Let's commit our 100 days of code to python!</p>
                        <a href="#" class="btn btn-primary">Start Watching</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Ultimate JavaScript Course</h5>
                        <p class="card-text">This latest JavaScript course comes with a premium curriculum that covers everything from basics to advance. On top of that, you will get my handwritten notes of JS for completely free. What are you waiting for? Just Enroll Buddy</p>
                        <a href="#" class="btn btn-primary">Start Watching</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Master React Step by Step</h5>
                        <p class="card-text">React is a free and open-source front-end JavaScript library. This series will cover React from starting to the end. We will learn react from the ground up!</p>
                        <a href="#" class="btn btn-primary">Start Watching</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
