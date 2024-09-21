<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduQuest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/web.css">
</head>
<body class="scrollable-page">
    <?php
    $class = "";
    $page = basename($_SERVER['PHP_SELF']);

    if (strpos($page, 'class9-10') !== false) {
        $class = 'class9-10';
    } elseif (strpos($page, 'class11-12') !== false) {
        $class = 'class11-12';
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <a class="navbar-brand" href="#">EduQuest</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="coursesDropdown">
                        <a class="dropdown-item" href="course.php?course=html">HTML</a>
                        <a class="dropdown-item" href="course.php?course=css">CSS</a>
                        <a class="dropdown-item" href="course.php?course=javascript">JavaScript</a>
                        <a class="dropdown-item" href="course.php?course=bootstrap">Bootstrap</a>
                        <a class="dropdown-item" href="course.php?course=python">Python</a>
                        <a class="dropdown-item" href="course.php?course=php">PHP</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="classDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Class
                    </a>
                    <div class="dropdown-menu" aria-labelledby="classDropdown">
                        <a class="dropdown-item" href="class9-10.php">Class 9-10</a>
                        <a class="dropdown-item" href="class11-12.php">Class 11-12</a>
                    </div>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search" name="query" required>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">&#9776; Menu</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
