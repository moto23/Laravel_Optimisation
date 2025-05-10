<?php
$servername = "srv1326.hstgr.io";
$username = "u477273611_playquest";
$password = "TEAcher23@#";
$dbname = "u477273611_teacherpanel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
date_default_timezone_set("Asia/Kolkata");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
