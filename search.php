<?php
if (isset($_GET['query'])) {
    $query = strtolower(trim($_GET['query']));

    
    $courses = [
        'html' => 'html',
        'css' => 'css',
        'javascript' => 'javascript',
        'bootstrap' => 'bootstrap',
        'python' => 'python',
        'php' => 'php',
        'class 9-10' => 'class9-10.php',
        'class 11-12' => 'class11-12.php',
    ];

    
    if (array_key_exists($query, $courses)) {
        $coursePage = $courses[$query];
        if (strpos($coursePage, '.php') !== false) {
            header("Location: $coursePage");
        } else {
            header("Location: course.php?course=$coursePage");
        }
        exit();
    } else {
        
        header("Location: dashboard.php");
        exit();
    }
} else {
    
    header("Location: dashboard.php");
    exit();
}
?>
