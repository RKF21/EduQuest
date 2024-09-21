<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduQuest Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body {
           height: 100%;
           margin: 0;
           background-color: #1c0e3c !important;
           display: flex;
           flex-direction: column;
        }

        body {
            background-color: #1c0e3c;
            color: #fff;
        }

        .container {
            flex: 1;
            max-width: 1200px;
            padding-top: 0;
            margin-top: 0;
            padding-bottom: 100px; 
            background-color: #1c0e3c;
            text-align: center; 
        }

        .navbar {
            margin-bottom: 0px;
            background-color: #2d1a54; 
            border-bottom: 2px solid #0056b3;
        }

        .navbar .navbar-brand {
            color: #fdfefe !important;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .navbar-nav .nav-link:hover {
            color: #ffdd57;
        }

        .navbar-toggler {
            border-color: #fff;
        }

        h1 {
            color: #007bff;
            font-size: 4rem;
            font-weight: bold;
        }

        .container p {
            color: #bbb;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            color:  #007bff;
            text-align: center;
        }

        .card {
            background-color: #495057;
            border: none;
            margin: 10px;
        }

        .card-title {
            font-size: 1.5rem;
        }

        .card-body {
            text-align: center;
        }

        .btn-primary {
            background-color: #472097 !important;
            border: none;
        }

        .footer {
            background-color: #2d1a54;
            color: #ffffff;
            text-align: center;
            justify-content:center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 12px;
            height:3vh;
        }
        .card-text{
            color:black !important;
        }
    </style>
</head>
<body>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: web.html");
    exit();
}

include 'templates/header.php'; 
?>
     
    <div class="container">
        <br><br>
        <h1>Welcome to EduQuest</h1>
        <p>
            EduQuest is a platform designed to empower students with the skills and knowledge they need 
            to excel in the modern world. Explore our diverse range of courses and start your learning 
            journey today!
        </p>
        <br><br><br>
        <h2>Courses</h2>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Python Tutorials</h5>
                        <p class="card-text">Python is one of the most demanded programming languages in the job market.Let's start!</p>
                        <a href="courses/python.php" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ultimate JavaScript Course</h5>
                        <p class="card-text">This JavaScript course covers everything from basics to advanced. Enroll now!</p>
                        <a href="courses/javascript.php" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Master Bootstrap Step by Step</h5>
                        <p class="card-text">Learn Bootstrap from scratch in this comprehensive course. Start learning today!</p>
                        <a href="courses/bootstrap.php" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <h2>SSC and HSC Courses</h2>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SSC Preparation Course</h5>
                        <p class="card-text">A comprehensive course to prepare students for the Secondary School Certificate (SSC) examination.</p>
                        <a href="class9-10.php" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">HSC Preparation Course</h5>
                        <p class="card-text">Prepare for the Higher Secondary Certificate (HSC) exam with in-depth resources and study materials.</p>
                        <a href="class11-12.php" class="btn btn-primary">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer class="footer">
    <div>
        <p>&copy; 2024 EduQuest. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
