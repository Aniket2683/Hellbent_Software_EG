<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$billing_name = $_POST['billing_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$payment_mode = $_POST['payment_mode'];

// Database connection
$check = new mysqli('localhost', 'root', '', 'earthygarden');
if ($check->connect_error) {
    die('Connection Failed: ' . $check->connect_error);
} else {
    $stmt = $check->prepare("INSERT INTO checkout (billing_name, email, address, city, zip, payment_mode)
    VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $billing_name, $email, $address, $city, $zip, $payment_mode);
    $stmt->execute();
    echo "Order Placed Successfully!!";
    $stmt->close();
    $check->close();
}
?>
