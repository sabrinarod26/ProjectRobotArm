
<?php
require 'dbcon.php';

// Get the current counter value from the database
$stmt = $conn->prepare("SELECT counter FROM tblcounter WHERE id = 1");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$counter = $row['counter'];

// Generate a new formid based on the current counter value
$formid = $counter + 1;

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

