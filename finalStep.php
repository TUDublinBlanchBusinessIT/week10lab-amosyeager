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
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
            <label><input type="checkbox" name="confirm">Yes</label>
        </div>
    </div>
   
    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</form>
