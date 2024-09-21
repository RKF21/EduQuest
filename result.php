<?php
session_start();

if (!isset($_GET['score']) || !isset($_GET['subject'])) {
    echo "Invalid result.";
    exit();
}

$score = $_GET['score'];
$subject = $_GET['subject'];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo ucfirst($subject); ?> Quiz Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40;
            color: #fff;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            color: #f8f9fa;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2><?php echo ucfirst($subject); ?> Quiz Result</h2>
        <p>Your Score: <?php echo $score; ?></p>
        <a href="profile.php" class="btn btn-primary">Go to Profile</a>
    </div>
</body>
</html>
