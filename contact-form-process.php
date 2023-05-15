
<?php
require 'dbcon.php';

// Get the last form ID from the database
$stmt = $conn->prepare("SELECT formid FROM tblcontact ORDER BY id DESC LIMIT 1");
$stmt->execute();
$lastFormID = $stmt->fetchColumn();

// Calculate the new form ID
$newFormID = $lastFormID + 1;

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO tblcontact (formid, name, email, reason, message) VALUES (:formid, :name, :email, :reason, :message)");

// Bind form data to prepared statement parameters
$stmt->bindParam(':formid', $formid);
$stmt->bindParam(':name', $_POST['Name']);
$stmt->bindParam(':email', $_POST['Email']);
$stmt->bindParam(':reason', $_POST['contactreason']);
$stmt->bindParam(':message', $_POST['Message']);

// Execute the statement
$stmt->execute();

// Check if insertion was successful
if ($stmt->rowCount() > 0) {
    echo "Thanks for contacting us!";
} else {
    echo "There was an error submitting the form.";
}
?>

