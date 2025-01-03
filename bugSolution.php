<?php
// Secure version using PDO and prepared statements
try {
  $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
  $stmt->execute(['username' => $_GET['username']]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user) {
    echo "Welcome, " . $user['username'] . "!";
  } else {
    echo "User not found.";
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?> 