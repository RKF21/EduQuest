<?php
include 'Connection/config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$subject = isset($_GET['subject']) ? urldecode($_GET['subject']) : '';
if (empty($subject)) {
    echo "No subject specified.";
    exit();
}

$query = "SELECT id, question_text, option_a, option_b, option_c, option_d FROM questions WHERE subject = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $subject);
$stmt->execute();
$result = $stmt->get_result();

$questions = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($subject); ?> Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #1c0e3c !important;
            color: #ffffff !important;
        }

        h1 {
            color: #007bff;
            display: inline-block;
        }

        label {
            color:white;
        }

        .form-check-label {
            color: white;
        }

        .quiz-container {
            background-color: #1c0e3c; 
            padding: 10px;
            border-radius: 10px;
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

        #timer {
            float: right;
            font-size: 24px;
            color: white;
        }

        .disabled-btn {
            background-color: gray;
            pointer-events: none;
        }

    </style>
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="container quiz-container">
        <h1 class="text-center"><?php echo htmlspecialchars($subject); ?> Quiz</h1>
        <div id="timer">Time left: 10:00</div>
        <br><br>
        <?php if (!empty($questions)): ?>
            <form id="quizForm" method="post" action="submit_quiz.php">
                <?php foreach ($questions as $index => $question): ?>
                    <div class="form-group">
                        <label><?php echo ($index + 1) . '. ' . htmlspecialchars($question['question_text']); ?></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_<?php echo $question['id']; ?>" value="a">
                            <label class="form-check-label">
                                <?php echo htmlspecialchars($question['option_a']); ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_<?php echo $question['id']; ?>" value="b">
                            <label class="form-check-label">
                                <?php echo htmlspecialchars($question['option_b']); ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_<?php echo $question['id']; ?>" value="c">
                            <label class="form-check-label">
                                <?php echo htmlspecialchars($question['option_c']); ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_<?php echo $question['id']; ?>" value="d">
                            <label class="form-check-label">
                                <?php echo htmlspecialchars($question['option_d']); ?>
                            </label>
                        </div>
                    </div>
                <?php endforeach; ?>
                <input type="hidden" name="subject" value="<?php echo htmlspecialchars($subject); ?>">
                <button type="submit" id="submitBtn" class="btn btn-primary">Submit Quiz</button>
            </form>
        <?php else: ?>
            <p>No quiz questions available for this subject.</p>
        <?php endif; ?>
    </div>

    <script>
        let timeLeft = 600; 
        const timerDisplay = document.getElementById('timer');
        const submitBtn = document.getElementById('submitBtn');
        const quizForm = document.getElementById('quizForm');

        const timerInterval = setInterval(function() {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;

            if (seconds < 10) {
                seconds = '0' + seconds;
            }

            timerDisplay.textContent = `Time left: ${minutes}:${seconds}`;

            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                timerDisplay.textContent = "Time's up!";
                submitBtn.classList.add('disabled-btn');
                submitBtn.disabled = true;
                quizForm.addEventListener('submit', function(event) {
                    event.preventDefault(); 
                });
            }

            timeLeft--;
        }, 1000);
    </script>
</body>
</html>
