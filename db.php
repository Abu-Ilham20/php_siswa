<?php

// session_start();

$db = mysqli_connect("localhost", "root", "", "php_belajar");
if (!$db) {
    echo mysqli_connect_error();
    exit;
}
