<?PHP
$name = $_GET['fname'];
$surname = $_GET['lname'];
$email = $_GET['email'];
$pass1 = $_GET['pword'];
$pass2 = $_GET['pword2'];

//database connection code
$servername ="localhost";
$username ="id20164890_graige";
$password = "Graigegraige!123";
$dbname = "id20164890_foodalarm";
$con = mysqli_connect($servername,$username, $password, $dbname);
if(!$con)
{
    die("Error : " .mysqli_connect_error());
}
if($pass1 == $pass2)
{
    $hashed_password = password_hash($pass1, PASSWORD_DEFAULT);
   $sql = "INSERT INTO `registry`(`name`,`surname`,`email`,`password`) VALUES('$name','$surname','$email','$hashed_password');";
   if(mysqli_query($con,$sql))
   {
    
    header("Location: login.html");
    exit();
   }
   else
   {
    echo "Something went Wrong...";
    echo mysqli_error($con);
   }
     
}
else{
    echo "Password Not matched...";
}
mysqli_close($con);

?>
