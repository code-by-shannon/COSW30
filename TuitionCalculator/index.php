<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuition Calculator</title>
</head>
<body>
    <h1>Long Beach City College Tuition Calculator</h1>
    <h2>Fill out this form to calculate total cost of tuition:</h2>

    <form action="index.php" method="post">

        <!--  Dropdown: Number of Units -->
        <label for="units">Please choose number of units
        <select name="units" id="units">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
        </select>
        </label>
        <br>
        <!-- California Resident or No -->
        <label for="resident">California Resident
        <input type="radio" name="resident" value="resident">
        </label>
        <label for="non-resident">Non California Resident
        <input type="radio" name="resident" value="non-resident">
        </label>
        <!--  College Service Card -->
        <h3>College Service Card</h3>
        <label for="service-card">Yes
        <input type="radio" name="service-card" value="yes">
        </label>
        <label for="service-card">No
        <input type="radio" name="service-card" value="no">
        </label>
        <!--  Parking Permit Fee -->
        <h3>Parking Permit Fee</h3>
        <label for="parking-permit">Yes
        <input type="radio" name="parking-permit" value="yes">
        </label>
        <label for="parking-permit">No
        <input type="radio" name="parking-permit" value="no">
        </label>
        


        <br>
        <input type="submit" value = "SUBMIT">
    </form>



<?php

$tuition_total = 19;
$tuition_resident = 46;
$tuition_non_resident = 331;
$service_card_fee = 20;
$parking_permit_fee = 30;


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $number_of_units_selected = $_POST['units'];
    $resident_status = $_POST['resident'];
    $instate = $tuition_resident * $number_of_units_selected;
    $outstate = $tuition_non_resident * $number_of_units_selected;
    $service_card_status = $_POST['service-card'];
    $parking_permit_status = $_POST['parking-permit'];
    
    // resident status check and total update
    if ($resident_status == 'resident'){
        $tuition_total += $instate;
        echo "In state tuition rate x total units selected for semester = <b>$" . ($instate) . "</b><br>";
    } else if ($resident_status == 'non-resident'){
        $tuition_total += $outstate;
        echo "Out of state tuition rate x total units selected for semester = <b>$" . ($outstate) . "</b><br>";
    }

    // service card check and total update
    if($service_card_status == 'yes'){
        $tuition_total += $service_card_fee;
        echo "Service card fee of <b>$20</b> added<br>";
    }

    // parking permit status and total update
    if($parking_permit_status == 'yes'){
        $tuition_total += $parking_permit_fee;
        echo "Parking permit fee of <b>$30</b> added<br>";
    }

    echo  "Student Health Fee Added: <b>$19</b><br><br>";
    echo   "Total fees plus tuition: <b>$" . $tuition_total . "</b>";
   
}

 // array check
 echo "<pre>";
 print_r($_POST);
 echo "</pre>";









?>


</body>
</html>

