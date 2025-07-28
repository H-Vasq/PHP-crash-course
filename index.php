<?php
$is_logged_in = true;

if ( $is_logged_in ) {
    $message = "Welcome Back!";
} else {
    $message = "Welcome.";
}

echo "$message <br>";

$message = !$is_logged_in ? "Welcome back!" : "Welcome.";

echo "$message <br>";



?>