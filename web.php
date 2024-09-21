<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connection/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action == 'register') {
        $username = trim($_POST['registerUsername']);
        $email = trim($_POST['registerEmail']);
        $password = trim($_POST['registerPassword']);

        $sql = "SELECT id FROM users WHERE username = ? OR email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows == 0) {
                $stmt->close();
                $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
                if ($stmt = $conn->prepare($sql)) {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $stmt->bind_param("sss", $username, $hashed_password, $email);
                    if ($stmt->execute()) {
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $username;
                        header("Location: dashboard.php");
                        exit();
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            } else {
                echo "Username or email already taken.";
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } elseif ($action == 'login') {
        $usernameOrEmail = trim($_POST['loginUsernameEmail']);
        $password = trim($_POST['loginPassword']);

        $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $usernameOrEmail, $usernameOrEmail);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $row['username'];
                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo "Invalid password.";
                }
            } else {
                echo "No user found with the provided username/email.";
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
    $conn->close();
}
 include 'templates/footer.php';
?>
