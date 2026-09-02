<?php

$host = "sql304.infinityfree.com";
$username = "if0_42361346";
$password = "Winwin26352";
$dbname = "if0_42361346_php";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

echo "เชื่อมต่อสำเร็จ นายบุณยกร เฉลิมพรวิทิต";

?>