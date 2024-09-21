<?php
include 'Connection/config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);
} else {
    $user = null;
    echo "User not found!";
    exit();
}

$quiz_query = "
    SELECT subject, MAX(marks) AS marks
    FROM quiz_scores
    WHERE user_id=" . $user['id'] . "
    GROUP BY subject
";
$quiz_result = mysqli_query($conn, $quiz_query);
$quiz_scores = [];
if ($quiz_result) {
    while ($row = mysqli_fetch_assoc($quiz_result)) {
        $quiz_scores[] = $row;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $college = $_POST['college'];
    $dob = $_POST['dob'];
    $phone_number = $_POST['phone_number'];
    $class = $_POST['class'];

    $update_query = "UPDATE users SET college='$college', dob='$dob', phone_number='$phone_number', class='$class' WHERE username='$username'";
    if (mysqli_query($conn, $update_query)) {
        header('Location: profile.php');
        exit();
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/web.css">
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

        .navbar-toggler {
            border-color: #fff; 
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
        .btn-view {
            background-color: #007bff;
            border: none;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        th,tr{
            color:white;
        }
        .form-group{
            width:800px;
        }
        .form-group label{
            color: white;
        }
        .table{
            width:70% !important;
        }
    </style>
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <div class="content">
        <div class="container">
            <h2 class="mt-5 text-white">Profile Information</h2>
            <form method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($user['username'] ?? ''); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="college">College/School/University</label>
                    <input type="text" class="form-control" id="college" name="college" value="<?php echo htmlspecialchars($user['college'] ?? ''); ?>">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo htmlspecialchars($user['dob'] ?? ''); ?>">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo htmlspecialchars($user['phone_number'] ?? ''); ?>">
                </div>
                <div class="form-group">
                    <label for="class">Class</label>
                    <input type="text" class="form-control" id="class" name="class" value="<?php echo htmlspecialchars($user['class'] ?? ''); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
            
            <h3 class="mt-5 text-white">Quiz Marks</h3>
            <?php if (!empty($quiz_scores)): ?>
                <table class="table table-white">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($quiz_scores as $score): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($score['subject']); ?></td>
                                <td><?php echo htmlspecialchars($score['marks']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No quiz marks available.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'templates/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
