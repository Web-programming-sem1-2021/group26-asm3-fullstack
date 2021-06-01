<?php

$email = $_GET["email"];

$phone = $_GET["phone"];

$password = $_GET["password"];

$fName = $_GET["first-name"];

$lName = $_GET["last-name"];

$address = $_GET["address"];

$city = $_GET["city"];

$zip = $_GET["zip"];

$file_open = fopen("../credentials.csv", "a");
$no_rows = count(file("../credentials.csv"));
if ($no_rows > 1) {
    $no_rows = $no_rows - 1 + 1;
}

$password = password_hash($password, PASSWORD_DEFAULT);

$form_data = [
    "sr_no" => $no_rows,
    "email" => $email,
    "phone" => $phone,
    "password" => $password,
    "first-name" => $fName,
    "last-name" => $lName,
    "address" => $address,
    "city" => $city,
    "zip" => $zip,
];

fputcsv($file_open, $form_data);
// header('Location: index.php');
if ($email !== null) {
    echo $email;
    echo $phone;
    echo $password;
    echo $fName;
    echo $lName;
    echo $address;
    echo $city;
    echo $zip;
    header("Location: login.php");
}
