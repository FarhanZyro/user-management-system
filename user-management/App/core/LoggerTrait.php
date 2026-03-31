<?php
namespace App\Core;

trait LoggerTrait {
    public function log($msg) {
        echo "[LOG]: $msg <br>";
    }
}