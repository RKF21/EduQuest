<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Course</title>
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
        <a href="#overview">Course Overview</a>
        <a href="#topics">Topics Covered</a>
        <a href="#example">Example Code</a>
    </div>

 
    <div class="content">
        <h1>CSS Course</h1>
        <p>Welcome to the CSS course. This course covers the following topics:</p>

        <h2 id="overview">Course Overview</h2>
        <p>This section provides an overview of CSS, the language used to style HTML documents.</p>

        <h2 id="topics">Topics Covered</h2>
        <ul>
            <li>Introduction to CSS</li>
            <li>Selectors and Properties</li>
            <li>Layout and Positioning</li>
            <li>Responsive Design</li>
        </ul>

        <h2 id="example">Example Code</h2>
        <pre><code>
/* Example CSS code */
body {
    font-family: Arial, sans-serif;
}

h1 {
    color: white;
}

p {
    font-size: 16px;
}
        </code></pre>
    </div>

    <?php include 'templates/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
