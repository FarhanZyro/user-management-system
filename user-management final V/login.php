<?php
require 'config.php';
require 'autoload.php';

use App\Services\AuthService;

if (isset($_POST['login'])) {

    $auth = new AuthService();

    $msg = $auth->authenticate(
        $conn,
        $_POST['email'],
        $_POST['password']
    );

    echo $msg;

    if ($msg == "Login successful") {
        header("Location: dashboard.php");
    }
}
?>

<h2>Login</h2>

<form method="POST">
<input name="email" placeholder="Email" required><br><br>

<!-- 🔥 THIS IS IMPORTANT -->
<input name="password" type="password" placeholder="Password" required><br><br>

<button name="login">Login</button>
</form>