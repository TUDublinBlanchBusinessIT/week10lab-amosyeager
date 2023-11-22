<?php
include("finalStepHeader.html");


session_start();


echo "Passenger's First Name: " . $_SESSION['passengerFN'] . "<br>";


echo "Passenger's Surname: " . $_SESSION['passengerSN'] . "<br>";


if (isset($_SESSION['luggage'])) {
  
    echo "Number of Bags Under 10KG: " . $_SESSION['subTenKG'] . "<br>";

    echo "Number of Bags 10-20KG: " . $_SESSION['overTenKG'] . "<br>";
}


?>

