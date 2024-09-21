<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 11-12 Subjects</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       body {
    background-color: #1c0e3c !important; 
    color: #ffffff; 
}

.navbar {
    margin-bottom: 20px;
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

.card-title {
    font-size: 1.25rem;
    color: #000; 
}

.btn-view {
    background-color: #007bff; 
    border: none;
    color: #fff; 
}

.btn-view:hover {
    background-color: #0056b3; 
}

.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    z-index: 1;
}

.sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    color: #f1f1f1;
}

.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

.openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #007bff; 
    color: white;
    padding: 10px 15px;
    border: none;
}

.openbtn:hover {
    background-color: #0056b3; 
}

.sidebar-open {
    left: 0;
}

.main-open {
    margin-left: 250px;
}

.card {
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
    margin: 25px;
    width: 20rem; 
    height: 15rem; 
}

.card-img-top {
    width: 100%;
    height: 130px; 
    object-fit: cover;
}

.card-body {
    text-align: center;
    background-color: #ffffff; 
    color: #333333;
    padding: 10px; 
}
h1{
    color:white;
    text-decoration:underline;
}
.btn-primary {
    background-color: #472097 !important;
    border-color: #007bff;

}  

    </style>
</head>
<body>
    <?php include 'templates/header.php'; ?>
   

    <div id="main" class="container">
        <h1 class="text-center">HSC</h1>
        <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsc.phy.png" class="card-img-top" alt="Physics 1st Paper">
                <div class="card-body">
                    <h5 class="card-title">Physics 1st Paper</h5>
                    <a href="subject.php?subject=physics1" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Physics 1st Paper" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsc.phy.png" class="card-img-top" alt="Physics 2nd Paper">
                <div class="card-body">
                    <h5 class="card-title">Physics 2nd Paper</h5>
                    <a href="subject.php?subject=physics2" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Physics 2nd Paper" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsc.c.png" class="card-img-top" alt="Chemistry 1st Paper">
                <div class="card-body">
                    <h5 class="card-title">Chemistry 1st Paper</h5>
                    <a href="subject.php?subject=chemistry1" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Chemistry1" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsc.c.png" class="card-img-top" alt="Chemistry 2nd Paper">
                <div class="card-body">
                    <h5 class="card-title">Chemistry 2nd Paper</h5>
                    <a href="subject.php?subject=chemistry2" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Chemistry2" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsc.m.png" class="card-img-top" alt="Chemistry 1st Paper">
                <div class="card-body">
                    <h5 class="card-title">Higher Math 1st Paper</h5>
                    <a href="subject.php?subject=highermath1" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Highermath1" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsc.m.png" class="card-img-top" alt="Chemistry 1st Paper">
                <div class="card-body">
                    <h5 class="card-title">Higher Math 2nd Paper</h5>
                    <a href="subject.php?subject=highermath2" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Highermath2" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsc.bio.png" class="card-img-top" alt="Chemistry 1st Paper">
                <div class="card-body">
                    <h5 class="card-title">Biology 1st Paper</h5>
                    <a href="subject.php?subject=biology1" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Biology1" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsc.bio.png" class="card-img-top" alt="Chemistry 1st Paper">
                <div class="card-body">
                    <h5 class="card-title">Biology 2nd Paper</h5>
                    <a href="subject.php?subject=biology2" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Biology2" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hscbangla.jpg" class="card-img-top" alt="Bangla 1st Paper">
                <div class="card-body">
                    <h5 class="card-title">Bangla 1st Paper</h5>
                    <a href="subject.php?subject=bangla1" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Bangla1" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hscbangla.jpg" class="card-img-top" alt="Bangla 2nd Paper">
                <div class="card-body">
                    <h5 class="card-title">Bangla 2nd Paper</h5>
                    <a href="subject.php?subject=bangla2" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Bangla2" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsceng.png" class="card-img-top" alt="English 1st Paper">
                <div class="card-body">
                    <h5 class="card-title">English 1st Paper</h5>
                    <a href="subject.php?subject=english1" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=English1" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hsceng.png" class="card-img-top" alt="English 2nd Paper">
                <div class="card-body">
                    <h5 class="card-title">English 2nd Paper</h5>
                    <a href="subject.php?subject=english2" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=English2" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="Images/hscict.png" class="card-img-top" alt="ICT">
                <div class="card-body">
                    <h5 class="card-title">ICT</h5>
                    <a href="subject.php?subject=ict" class="btn btn-view">View Materials</a>
                    <a href="quiz_subject.php?subject=Ict" class="btn btn-primary">Quiz</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
