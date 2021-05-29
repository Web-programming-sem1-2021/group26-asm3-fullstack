<?php

$email = $_GET["email"];

$phone = $_GET["phone"];

$password = $_GET["password"];

$file_open = fopen("data/credentials.csv", "a");
$no_rows = count(file("data/credentials.csv"));
if ($no_rows > 1) {
    $no_rows = $no_rows - 1 + 1;
}

$password = password_hash($password, PASSWORD_DEFAULT);

$form_data = [
    "sr_no" => $no_rows,
    "email" => $email,
    "phone" => $phone,
    "password" => $password,
];

fputcsv($file_open, $form_data);
// header('Location: index.php');
if ($email !== null) {
    echo $email;
    echo $phone;
    // var_dump($email);
    header('Location: login.php');
}