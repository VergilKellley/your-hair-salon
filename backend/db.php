<?php
$conn = new mysqli("localhost:3306", "root", "", "your-hair-salon");
if($conn->connect_errno){
    echo json_encode(['error'=> $conn->connect_error]);
    exit();
}