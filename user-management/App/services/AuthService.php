<?php
namespace App\Services;

class AuthService {
    public function authenticate($conn, $email, $password) {

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {

                $_SESSION['user'] = $user['name'];
                $_SESSION['role'] = $user['role'];

                return "Login successful";
            }
        }

        return "Invalid credentials";
    }
}