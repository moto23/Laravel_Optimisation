<?php
session_start();

require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM teacher WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $stored_password = $user['password'];
        $status = $user['status'];
        $hashed_input_password = md5($password);

        if ($hashed_input_password === $stored_password && $status == 1) {
            $_SESSION['email'] = $username;
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['loggedin'] = true;
            echo "success";
        } else if ($status == 0) {
            echo "status";
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "User not found. Please check your username.";
    }

    $stmt->close();
}

$conn->close();