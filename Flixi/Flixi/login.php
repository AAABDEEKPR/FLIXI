<?php
session_start();
include 'database.php'; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: welcome.php"); // Redirect to a welcome page
            exit;
        } else {
            header("Location: nocontact.php"); // Redirect to 404 error page
            exit;
        }
    } else {
        header("Location: nocontact.php"); // Redirect to 404 error page
        exit;
    }
}
