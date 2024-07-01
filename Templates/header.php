<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">EduQuest</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Courses
                </a>
                <div class="dropdown-menu" aria-labelledby="coursesDropdown">
                    <a class="dropdown-item" href="#">Course 1</a>
                    <a class="dropdown-item" href="#">Course 2</a>
                    <a class="dropdown-item" href="#">Course 3</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="classDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Class
                </a>
                <div class="dropdown-menu" aria-labelledby="classDropdown">
                    <a class="dropdown-item" href="#">Class 1</a>
                    <a class="dropdown-item" href="#">Class 2</a>
                    <a class="dropdown-item" href="#">Class 3</a>
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
        </ul>
    </div>
</nav>
