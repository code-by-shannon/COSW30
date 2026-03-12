

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Sentence and Paragraph Generator</title>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Dynamic Sentence and Paragraph Generator</h1>



<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$words = [
    "apex","traction","oversteer","understeer","downforce","draft","pit","chicane","hairpin","grid",
    "pole","lap","sector","split","qualifying","podium","championship","brake","throttle","gear",
    "rev","rpm","clutch","shift","suspension","camber","toe","tire","slick","compound",
    "rubber","marbles","kerb","curb","runoff","barrier","flag","yellow","green","checkered",
    "marshal","steward","penalty","incident","spin","crash","restart","safety","formation","launch",
    "start","finish","straight","corner","turn","entry","exit","line","racingline","balance",
    "setup","telemetry","data","strategy","fuel","tank","pitstop","crew","engineer","mechanic",
    "garage","team","driver","rookie","veteran","champion","rival","battle","overtake","defend",
    "block","divebomb","drafting","slipstream","push","attack","defense","stint","endurance","sprint",
    "qualify","laprecord","hotlap","practice","warmup","cooldown","gridwalk","parade","celebration","trophy"
    ];

    $sentence = [];
    $paragraph = [];
    $sentence_str = '';

    $length = count($words);
    

    
    for($p = 0; $p < rand(3, 6); $p++){


        
        $sentence = [];
        
        for ($s = 0; $s < rand(6, 10); $s++){
            $random_number = rand(0, $length - 1);
            $random_word = $words[$random_number];
            array_push($sentence, $random_word);

           
        }
        $sentence_str = implode(' ', $sentence);
        $sentence_str = ucfirst(($sentence_str) . '.');
        
        array_push($paragraph, $sentence_str);
    };

    echo '<p>' . implode(' ', $paragraph) . '</p>';
?>

<button id="generate">Generate New Paragraph</button>


<script src='main.js'></script>
</body>
</html>