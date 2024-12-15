<?php
include 'database.php';
global $connect;

$user = "yonetici";
$sifre = "123";

// Hash the password
$hashed_sifre = password_hash($sifre, PASSWORD_DEFAULT);
echo "Hashed Password: $hashed_sifre<br>"; // Debug: Check hashed password

// Update the existing password
$sql = $connect->prepare("UPDATE login SET sifre = ? WHERE kullanici = ?");
if (!$sql) {
    die("Preparation failed: " . $connect->error); // Debug: Check for query preparation errors
}
$sql->bind_param("ss", $hashed_sifre, $user);

if ($sql->execute()) {
    echo "Password hashed and updated successfully!";
} else {
    echo "Error: " . $sql->error; // Debug: Output query execution errors
}

$connect->close();
?>
