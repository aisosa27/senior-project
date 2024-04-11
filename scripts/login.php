<?php
session_start();

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Placeholder for database query to retrieve user data
// $pdo = new PDO('mysql:host=your_host;dbname=your_db', 'username', 'password');
// $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
// $stmt->execute([$email]);
// $user = $stmt->fetch();

// Simulate fetching user from database
$user = [
    'email' => 'user@example.com',
    // Password for demonstration: 'securepassword', PLEASE use hashed passwords in production
    'password' => '$2y$10$Ewmjotp6PNo-6Q0XWPB8..S8U3vzmZG6nSxKg1Px1UhW3EvQhKq3W'
];

if ($user && password_verify($password, $user['password'])) {
    // Login successful
    $_SESSION['user_email'] = $user['email'];
    echo "Login successful. Redirecting to your dashboard...";
    header('Refresh: 3; URL=dashboard.html'); // Assuming you have a dashboard.html
} else {
    echo "Login failed. Please try again.";
    header('Refresh: 3; URL=login.html');
}

// Adjusted pseudo-code for successful login/signup redirection
header('Location: /career-hub/career-hub.html'); // Redirect to the dashboard inside the profile folder
