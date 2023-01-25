<?PHP
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST['email'];
  $passwordd = $_POST['password'];
  

  
  //connect to the database
  $servername = "localhost";
  $username = "id20164890_graige";
  $password = "Graigegraige!123";
  $dbname = "id20164890_foodalarm";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  //check the connection
     if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    //prepare and execute the query
    $query = "SELECT password FROM registry WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $hashed_password_from_database = $row['password'];

    //check if a match was found
    if(password_verify($passwordd, $hashed_password_from_database)){
        //start a session
        session_start();
        //set the logged_in session variable
        $_SESSION['logged_in'] = true;
        header("Location: app_homescreen.html"); // This will redirect the user to the "app_homescreen.html" page
    } else {
        echo "<script>alert('Invalid email or password.');</script>";
        if (!headers_sent()) {
            header("Location: login.html");
            exit;
        }
    }
    mysqli_close($conn);
}
?>