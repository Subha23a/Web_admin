<?php $conn = new mysqli('localhost', 'root', '','subha');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>