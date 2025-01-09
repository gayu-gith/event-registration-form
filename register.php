<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 // Database connection
 $conn = new mysqli('localhost', 'root', '', 'tech_event');
 if ($conn->connect_error) {
 die('Connection Failed: ' . $conn->connect_error);
 }
 // Insert the user data into the database
 $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
 $stmt->bind_param("sss", $name, $email, $password);
 if ($stmt->execute()) {
 echo "Registration successful!";
 } else {
 echo "Error: " . $stmt->error;
 }
 $stmt->close();
 $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Register</title>
 <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="form-container">
 <h1>Register</h1>
 
 <form method="POST" action="">
 <label>Name:</label>
 <input type="text" name="name" required>
 
 <label>Email:</label>
 <input type="email" name="email" required>
 
 <label>Password:</label>
 <input type="password" name="password" required>
 
 <button type="submit">Register</button>
 </form>
 </div>
</body>
</html>
