<?php
include 'Connection/config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $question_text = $_POST['question_text'];
    $option_a = $_POST['option1'];
    $option_b = $_POST['option2'];
    $option_c = $_POST['option3'];
    $option_d = $_POST['option4'];
    $correct_option = $_POST['correct_option'];

    $stmt = $conn->prepare("INSERT INTO questions (class, subject, question_text, option_a, option_b, option_c, option_d, correct_option) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $class, $subject, $question_text, $option_a, $option_b, $option_c, $option_d, $correct_option);

    if ($stmt->execute()) {
        $message = "Question added successfully!";
    } else {
        $message = "Failed to add question: " . $conn->error;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quiz Question</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="container">
        <h1>Add Quiz Question</h1>

        <?php if (!empty($message)): ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="post" action="">
            <div class="form-group">
                <label for="class">Class</label>
                <select name="class" id="class" class="form-control">
                    <option value="class9-10">Class 9-10</option>
                    <option value="class11-12">Class 11-12</option>
                </select>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <select name="subject" id="subject" class="form-control">
                    <option value="Physics 1st paper">Physics1</option>
                    <option value="Chemistry1">Chemistry1</option>
                    <option value="Biology1">Biology1</option>
                </select>
            </div>

            <div class="form-group">
                <label for="question_text">Question Text</label>
                <textarea name="question_text" id="question_text" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="option1">Option A</label>
                <input type="text" name="option1" id="option1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="option2">Option B</label>
                <input type="text" name="option2" id="option2" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="option3">Option C</label>
                <input type="text" name="option3" id="option3" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="option4">Option D</label>
                <input type="text" name="option4" id="option4" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="correct_option">Correct Option</label>
                <select name="correct_option" id="correct_option" class="form-control" required>
                    <option value="option1">Option A</option>
                    <option value="option2">Option B</option>
                    <option value="option3">Option C</option>
                    <option value="option4">Option D</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Question</button>
        </form>
    </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
