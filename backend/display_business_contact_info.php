<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM business_contact_info;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $business_name = $row['business_name'];
    $business_phone = $row['business_phone'];
    $business_email = $row['business_email'];
    $business_street_address = $row['business_street_address'];
    $business_city = $row['business_city'];
    $business_state = $row['business_state'];
    $business_zip = $row['business_zip'];
    }
}