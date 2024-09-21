<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Course</title>
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

        .navbar-toggler {
           border-color: #fff; 
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
        <a href="#overview">Course Overview</a>
        <a href="#topics">Topics Covered</a>
        <a href="#example">Example Code</a>
    </div>

    <div class="content">
        <h1 class= "text-center">HTML Course</h1>

        <br><br>
        <h2 id="overview">Course Overview</h2>
        <p>This section provides an overview of HTML, the standard markup language for creating web pages.</p>

        <h2 id="topics">Topics Covered</h2>
        <ul>
            <li>Introduction to HTML</li>
            <li>Basic HTML Elements</li>
            <li>Forms and Input</li>
            <li>Multimedia Elements</li>
        </ul>

        <h2 id="example">Example Code</h2>
        <pre>
<code>
&lt;!-- Example HTML code --&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Hello, World!&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
    &lt;p&gt;This is an example of HTML code.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
        </pre>
    </div>

    <?php include 'templates/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
