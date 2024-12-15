<?php
$connect = new mysqli("localhost", "root", "", "kasei");
$connect-> set_charset("utf8");

if ($connect->connect_error)
{
    exit("Bağlantı hatası: " . $connect->connect_error);
}
else
{
}
?>
