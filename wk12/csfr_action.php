<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $session_token = $_SESSION["confirmation"];
    $post_token = $_POST["confirmation"];

    if ($session_token === $post_token) {
        echo "Valid request";
    } else {
        echo "CSRF attack detected!";
    }
}
?>
