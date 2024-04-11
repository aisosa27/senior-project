<?php
// Basic validation and sanitation of input
$fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Example: Simple validation (You should use more comprehensive validation)
if (empty($email) || empty($password) || empty($fullname)) {
    echo "Please fill in all fields.";
    exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Placeholder for database connection and insertion logic
// $pdo = new PDO('mysql:host=your_host;dbname=your_db', 'username', 'password');
// $stmt = $pdo->prepare('INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)');
// $stmt->execute([$fullname, $email, $hashedPassword]);

echo "Signup successful. Redirecting to login page...";
// Redirect to login page
header('Refresh: 3; URL=login.html');
// Adjusted pseudo-code for successful login/signup redirection
header('Location: /career-hub/career-hub.html'); // Redirect to the dashboard inside the profile folder
