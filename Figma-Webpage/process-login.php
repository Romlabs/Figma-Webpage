<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Placeholder logic for exam
    if (!empty($username) && !empty($password)) {
        echo "Login successful (logic placeholder)";
    } else {
        echo "Invalid login.";
    }
}
