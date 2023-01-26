<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $product_description = $_POST['product_description'];
  $expiration_date = $_POST['expiration_date'];
  $pickup_location = $_POST['pickup_location'];
  
  //connect to the database
  $servername = "localhost";
  $username = "id20164890_graige";
  $password = "Graigegraige!123";
  $dbname = "id20164890_foodalarm";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
   //check the connection
    //check the connection
  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }
  
  //prepare and execute the query
  $sql = "INSERT INTO giveaways (product, expiration_date, pickup_location) VALUES ('$product_description', '$expiration_date', '$pickup_location')";
  if (mysqli_query($conn, $sql)) {
    include 'get_giveaways.php';  
    //echo "New record created successfully";
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo $sql;
    echo mysqli_error($conn);
  }
  
}

 
  mysqli_close($conn);

?>
