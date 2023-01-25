<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//Validate data
if(empty($name) || empty($email) || empty($message)){
    echo "Please fill out all fields";
    exit;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format";
    exit;
}

//Connect to database
$servername = "localhost";
$username = "id20164890_graige";
$password = "Graigegraige!123";
$dbname = "id20164890_foodalarm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Insert data into table
$sql = "INSERT INTO form_data (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Close connection
$conn->close();

//Send email
$to = "foodalarm00@gmail.com";
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
    echo "<script>alert('Message sent');</script>";
        if (!headers_sent()) {
      header("Location: contact.html");
      exit;
    }
}else{
    echo "An error occurred, please try again later";
}

?>