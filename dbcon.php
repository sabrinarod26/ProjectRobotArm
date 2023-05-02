<?php
// Connection

$servername = "studentdb-maria.gl.umbc.edu";
$username = "srodrig1";
$password = "srodrig1";
$dbname = "srodrig1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>