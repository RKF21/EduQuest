<?php
if (isset($_GET['course'])) {
    $course = $_GET['course'];
    switch ($course) {
        case 'html':
           
            include 'courses/html.php';
            break;
        case 'css':
           
            include 'courses/css.php';
            break;
        case 'javascript':
            
            include 'courses/javascript.php';
            break;
        case 'bootstrap':
            
            include 'courses/bootstrap.php';
            break;
        case 'python':
           
            include 'courses/python.php';
            break;
        case 'php':
           
            include 'courses/php.php';
            break;
        default:
           
            include 'courses/default.php';
            break;
    }
} else {
   
    header("Location: dashboard.php");
    exit();
}
?>
