<?php
// Check if data was sent via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the user data from the POST request
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $locality = $_POST['locality'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Here you can perform additional processing, validation, or database storage
    // For this example, we'll simply display the received data
    echo "Received data:\n";
    echo "Name: $name\n";
    echo "Age: $age\n";
    echo "Gender: $gender\n";
    echo "Locality: $locality\n";
    echo "Email: $email\n";
    echo "Phone: $phone\n";
}
