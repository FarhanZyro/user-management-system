<?php
require 'config.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO users (name,email,password,role)
            VALUES ('$name','$email','$password','$role')";

    if ($conn->query($sql)) {
        echo "Registered successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Register</h2>

<form method="POST">
<input name="name" placeholder="Name" required><br><br>
<input name="email" placeholder="Email" required><br><br>

<!-- 🔥 THIS IS IMPORTANT -->
<input name="password" type="password" placeholder="Password" required><br><br>

<select name="role">
<option value="user">User</option>
<option value="admin">Admin</option>
</select><br><br>

<button name="submit">Register</button>
</form>