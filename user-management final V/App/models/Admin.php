<?php
namespace App\Models;

use App\Core\AbstractUser;
use App\Core\AuthInterface;
use App\Core\LoggerTrait;

class Admin extends AbstractUser implements AuthInterface {
    use LoggerTrait;

    public function userRole() {
        return "admin";
    }

    public function login($email, $password) {
        $this->log("Admin logged in");
        return true;
    }

    public function logout() {
        session_destroy();
        return "Admin logout";
    }
}