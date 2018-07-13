<?php
 
$conn = new mysqli("localhost", "root", "", "trivia");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>