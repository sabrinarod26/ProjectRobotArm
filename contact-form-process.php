
<?php
require 'dbcon.php';

// Generate a new formid
$formid = uniqid();

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO tblcontact (formid, name, email, reason, message) VALUES (:formid, :name, :email, :reason, :message)");

// Bind form data to prepared statement parameters
$stmt->bindParam(':formid', $formid);
$stmt->bindParam(':name', $_POST['Name']);
$stmt->bindParam(':email', $_POST['Email']);
$stmt->bindParam(':reason', $_POST['contact reason']);
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

