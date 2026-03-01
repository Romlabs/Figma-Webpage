<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $display = $_POST["display_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];

    if ($password !== $confirm) {
        echo "Passwords do not match.";
        exit;
    }

    echo "Registration successful (logic placeholder)";
}
