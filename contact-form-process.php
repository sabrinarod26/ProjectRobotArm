
<?php
require 'dbcon.php';
//echo "Connected successfully";

// Generate a new formid
$formid = uniqid();

// Prepare SQL statement
$stmt = $pdo->prepare("INSERT INTO tblcontact (formid, name, email, reason, message) VALUES (:formid, :name, :email, :reason, :message)");

// Bind form data to prepared statement parameters
$stmt->bindParam(':formid', $formid);
$stmt->bindParam(':name', $_POST['Name']);
$stmt->bindParam(':email', $_POST['Email']);
$stmt->bindParam(':reason', $_POST['contact_reason']);
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
