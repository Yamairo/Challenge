<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["pword"];
        $password2 = $_POST["pword2"];

        //Validate form data
        if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($password2)) {
            echo "Please fill in all fields";
        } elseif ($password != $password2) {
            echo "Passwords do not match";
        } else {
            //Save data to database
            //Hash the password
            $password = password_hash($password, PASSWORD_DEFAULT);

            //Insert data into users table
            //connection to DB
            $servername = "localhost";
            $username = "your_username";
            $password = "your_password";
            $dbname = "your_dbname";
            $conn = new mysqli($servername, $username, $password, $dbname);

            //Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO users (first_name, last_name, email, password)
            VALUES ('$first_name', '$last_name', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                //Redirect to home page
                header("Location: login.html");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
?>
