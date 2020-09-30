<?php

$rawdata = file_get_contents('php://input');
//$rawdata = "U41f193fcda59130f83cc2cc16e4929e9,60038527,0,1598434475828";

$servername = "localhost";
$username = "rebatetr_dashboard";
$password = "rebate1234";
$dbname = "rebatetr_dashboard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$posted_data = explode(",", trim($rawdata));
$UserID = $posted_data[0];
$Account = $posted_data[1];
$Text = $posted_data[2];


//$sql1 = "INSERT INTO log (UserID, Text, Timestamp) VALUES ('$UserID', '$Text', '$Timestamp')";
$sql1 = "UPDATE log SET Text='$Text' WHERE UserID='$UserID' AND Account='$Account'";
if ($conn->query($sql1) === TRUE) {
	echo "Record updated successfully";
  }


?>
