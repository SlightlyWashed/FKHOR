<?php
$host = "localhost";
$username = "farah";
$password = "1qw23er45t";
$database = "mysql";

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
} else {
    echo " ";
}
?>