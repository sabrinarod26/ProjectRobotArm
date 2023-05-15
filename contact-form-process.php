
<?php
require 'dbcon.php';

// Check if the connection is successful
if (!$conn) die("Connection failed: " . mysqli_connect_error());

// Get the last form ID from the database
$stmt = $conn->prepare("SELECT formid FROM tblcontact ORDER BY formid DESC LIMIT 1");
$stmt->execute();
$stmt->bind_result($lastFormID);
$stmt->fetch();
$stmt->close();

// Calculate the new form ID
$newFormID = $lastFormID + 1;
// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO tblcontact (formid, name, email, reason, message) VALUES (?, ?, ?, ?, ?)");
if (!$stmt) die("Prepare failed: " . $conn->error);

// Bind form data to prepared statement parameters
$stmt->bind_param("issss", $newFormID, $_POST['Name'], $_POST['Email'], $_POST['contactreason'], $_POST['Message']);

// Execute the statement
if (!$stmt->execute()) die("Execute failed: " . $stmt->error);

// Check if insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Thanks for contacting us! <a href='index.html'>Go back to home page</a>";
} else {
    echo "There was an error submitting the form.";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
