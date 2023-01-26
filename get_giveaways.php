<?php
    //connect to the database
    $servername = "localhost";
    $username = "id20164890_graige";
    $password = "Graigegraige!123";
    $dbname = "id20164890_foodalarm";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // check the connection
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    //prepare and execute the query
    $sql = "SELECT product, expiration_date, pickup_location FROM giveaways";
    $result = mysqli_query($conn, $sql);

    $output = '';
    while($row = mysqli_fetch_assoc($result))
    {
        $output .= '<div class="giveaway">';
        $output .= '<h2>' . $row['product'] . '</h2>';
        $output .= '<p>Expiration Date: ' . $row['expiration_date'] . '</p>';
        $output .= '<p>Pickup Location: ' . $row['pickup_location'] . '</p>';
        $output .= '</div>';
    }

    echo $output;
    mysqli_close($conn);
?>
