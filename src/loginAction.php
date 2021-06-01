<?php

$username = $_GET["username"];

$password = $_GET["password"];

$hash = password_hash($password, PASSWORD_DEFAULT);

if (!strlen($username) || !strlen($password)) {
    die("Please enter a username and password");
}

$success = false;

$handle = fopen("../credentials.csv", "r");

while (($data = fgetcsv($handle)) !== false) {
    if (
        substr($data[1], 0, 6) == substr($username, 0, 6) &&
        substr($data[3], 0, 6) == substr($hash, 0, 6)
    ) {
        $success = true;
        break;
    }
}

fclose($handle);

if ($success) {
    header("Location: my-account.php");
} else {
}
