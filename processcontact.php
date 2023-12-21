<?php
require_once 'includes/header.php';
require_once 'includes/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Validate the data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Please fill out all required fields.";
        // You might want to redirect the user back to the form here
        exit();
    }

    // Prepare and execute SQL query to insert data into the contact table
    $sql = "INSERT INTO contact (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "Contact details successfully saved!";
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted, redirect the user (or handle it accordingly)
    header("Location: contactus.php");
    exit();
}
?>
