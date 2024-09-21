<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/web.css">
    <style>
        body {
            background-color: #1c0e3c !important;
            color: #ffffff !important;
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

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0px;
            background-color: #251e4b;
            overflow-x: hidden;
            padding-top: 70px;
        }

        .sidebar a {
            padding: 8px 8px 8px 16px;
            text-decoration:none;
            font-size: 18px;
            color:#ffffff;
            display: block;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .content {
            margin-left: 260px; 
            padding: 0px 10px;
        }

        h2 {
            margin-top: 20px;
            text-decoration:solid;
            scroll-margin-top: 80px;
        }
    
        pre code {
            font:inherit;
            color:white !important;
        }
        h1 {
            color:white;
        }
        .title{
            font-size:1.50rem;
        }
        html {
         scroll-behavior: smooth;
        } 

    </style>
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="sidebar">
        <a href="#introduction">Introduction to PHP</a>
        <a href="#datatypes">Data Types and Variables</a>
        <a href="#controlstructures">Control Structures</a>
        <a href="#functions">Functions</a>
        <a href="#filehandling">File Handling</a>
        <a href="#sessions">Sessions and Cookies</a>
        <a href="#mysql">PHP and MySQL</a>
    </div>

    <div class="content">
            <h1 class="text-center">PHP Course</h1>
          
             <br><br>
            <h2>Course Overview</h2>
            <p>This section provides an overview of PHP, a high-level programming language known for its readability and versatility.</p>

            <h2 id="datatypes">Data Types and Variables</h2>
            <p>This section covers the different data types in PHP and how to work with variables.</p>

            <h2 id="controlstructures">Control Structures</h2>
            <p>This section covers the control structures available in PHP, including loops and conditionals.</p>

            <h2 id="functions">Functions</h2>
            <p>This section covers how to define and use functions in PHP.</p>

            <h2 id="filehandling">File Handling</h2>
            <p>This section covers how to read from and write to files using PHP.</p>

            <h2 id="sessions">Sessions and Cookies</h2>
            <p>This section covers how to use sessions and cookies to manage user data.</p>

            <h2 id="mysql">PHP and MySQL</h2>
            <p>This section covers how to interact with MySQL databases using PHP.</p>

            <h2>Example Code</h2>
            <pre><code>&lt;?php
            // Example PHP code
            echo "Hello, World!";
            ?&gt;
            </code></pre>
        </div>
    </div>

    <?php include 'templates/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
