<?php
include 'Connection/config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($user_id);
$stmt->fetch();
$stmt->close();

if (!$user_id) {
    die("User ID not found for username: $username");
}

$subject = $_POST['subject'];
$total_marks = 0;
$correct_answers = 0;
$total_questions = 0;

foreach ($_POST as $key => $selected_option) {
    if (strpos($key, 'question_') === 0) {
        $question_id = str_replace('question_', '', $key);

        $stmt = $conn->prepare("SELECT correct_option FROM questions WHERE id = ?");
        $stmt->bind_param("i", $question_id);
        $stmt->execute();
        $stmt->bind_result($correct_option);
        $stmt->fetch();
        $stmt->close();

        $total_questions++;

        switch ($selected_option) {
            case 'a':
                $selected_option_formatted = 'option1';
                break;
            case 'b':
                $selected_option_formatted = 'option2';
                break;
            case 'c':
                $selected_option_formatted = 'option3';
                break;
            case 'd':
                $selected_option_formatted = 'option4';
                break;
            default:
                $selected_option_formatted = '';
        }

        if ($selected_option_formatted === $correct_option) {
            $correct_answers++;
        }
    }
}

$total_marks = $correct_answers;

$stmt = $conn->prepare("INSERT INTO quiz_scores (user_id, subject, marks)
                        VALUES (?, ?, ?)
                        ON DUPLICATE KEY UPDATE marks = VALUES(marks), updated_at = CURRENT_TIMESTAMP");
$stmt->bind_param("isi", $user_id, $subject, $total_marks);

if ($stmt->execute()) {
    header("Location: result.php?score=$total_marks&subject=$subject");
    exit();
} else {
    echo "Failed to submit quiz: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
