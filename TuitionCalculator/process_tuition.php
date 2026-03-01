<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<div class="results-container">

<?php
$tuition = 0;
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
        $tuition += $instate;
        
        echo "In state tuition rate x total units selected for semester = <b>$" . ($instate) . "</b><br>";
    } else if ($resident_status == 'non-resident'){
        $tuition_total += $outstate;
        $tuition += $outstate;
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
    echo   "Total fees plus tuition: <b>$" . $tuition_total . "</b><br>";


    // scholarship total and adjusted final payment
    $scholarship_fund = rand(0, $tuition);
    echo "You have been awarded a scholarship of <b>$" . $scholarship_fund . '</b><br>';
    echo "Your adjusted tuition fees plus tuition is now <b>$" . $tuition . "</b> - <b>" . $scholarship_fund . "</b> which is equal to <b>$" . ($tuition - $scholarship_fund) . '</b><br>';
    $final_fees = $tuition_total - $scholarship_fund;
    echo "Your adjusted total tuition and services fee is <b>$" . $final_fees . '</b>'; 
   
}

// *** array check ***
//  echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";

?>


</div>


</body>
</html>


