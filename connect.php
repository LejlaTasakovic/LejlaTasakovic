<?php
$conn = new mysqli('localhost', 'root', '', 'resume');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>