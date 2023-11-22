<?php

session_start();


if (isset($_POST['confirm'])) {
    
    $firstname = $_SESSION['passengerFN'];
    $surname = $_SESSION['passengerSN'];
    $bagsUnderTenKG = isset($_SESSION['subTenKG']) ? $_SESSION['subTenKG'] : 0;
    $bagsOverTenKG = isset($_SESSION['overTenKG']) ? $_SESSION['overTenKG'] : 0;

   
    $mysqli = new mysqli("localhost", "root", "", "bookflight");

    
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }


    $sql = "INSERT INTO flightbooking (firstname, surname, bagsUnderTenKG, bagsOverTenKG) VALUES ('$firstname', '$surname', '$bagsUnderTenKG', '$bagsOverTenKG')";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>
