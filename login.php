<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $email = $_POST['email'];
 $password = $_POST['password'];
 // Database connection
 $conn = new mysqli('localhost', 'root', '', 'tech_event');
 if ($conn->connect_error) {
 die('Connection Failed: ' . $conn->connect_error);
 }
 // Fetch the user data from the database
 $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
 $stmt->bind_param("s", $email);
 $stmt->execute();
 $stmt->store_result();
 
 
 if ($stmt->num_rows > 0) {
 $stmt->bind_result($hashed_password);
 $stmt->fetch();
 // Verify the password
 if (password_verify($password, $hashed_password)) {
 echo "Login successful! Welcome to the event.";
 } else {
 echo "Invalid password.";
 }
 } else {
 echo "No user found with this email.";
 }
 
 $stmt->close();
 $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Login</title>
 <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="form-container">
 <h1>Event Login</h1>
 
 <form method="POST" action="">
 <label>Email:</label>
 <input type="email" name="email" required>
 
 <label>Password:</label>
 <input type="password" name="password" required>
 
 <button type="submit">Login</button>
 </form>
 </div>
</body>
</html>
