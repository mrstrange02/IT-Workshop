<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

// Process the data (e.g., store in database, send email, etc.)
// For simplicity, just echoing here
echo "The sum of $num1 and $num2 is : ";
echo $num1+$num2;
}
?>
