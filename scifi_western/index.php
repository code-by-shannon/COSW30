<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sci Fi Western Lorem Ipsum</title>
</head>
<body>
    <div class="main-div">
    <h1>Sci Fi Western Lorem Ipsum</h1>

<!-- FORM -->
<form method="POST">
<div class="controls">
    <label for="paragraphs">How many paragraphs for your cosmic journey?</label>
    <select name="paragraphs" id="paragraphs">
        <?php
        //  store user chosen value 
        $paragraph_count = $_POST['paragraphs'];

        for ($i = 1; $i <= 10; $i++) {
            if ($i == $paragraph_count) {
            // change attribute to 'selected' for dropdown value that matches user input 
            echo "<option value='$i' selected>$i</option>";
            } else { 
            echo "<option value='$i'>$i</option>";
            }
        }
        ?>
    </select>
    <button type="submit">Generate Cosmic Wisdom</button>
    </div>
</form>

    <?php
    $word_list = [
    "the","the","the","the","a","a","an","and","and","but","or","so","yet",
    "in","on","under","over","through","across","beyond","near","around",
    "toward","into","from","between","without","with","inside","outside",

    "exiled","marshall-sol","laser-smith", "bit-bounty","saloon",
    "frontier","trail","duel","revolver","spurs","saddle","wagon",
    "prospector","ranch","horse","desert","canyon","gold","town","drifter",
    "lawman","boot","hat","campfire","posse","tumbleweed",

    "galaxy","starship","asteroid","nebula","orbit","quantum","cosmic",
    "satellite","warp","plasma","android","cyborg","radiation","laser",
    "terraform","module","drone","gravity","station","probe","signal",
    "reactor","engine","hull","planet","moon","comet",

    "space-sheriff","galactic-outlaw","laser-revolver","plasma-duel",
    "cyborg-horse","neon-saloon","asteroid-town","cosmic-frontier",
    "quantum-bounty","orbiting-ranch","robot-gunslinger","stellar-marshal",
    "space-bandit","nebula-prospector","gravity-wagon","cyber-spurs",
    "ion-trail","dusty-planet","starlight-desert","satellite-sheriff",
    "warp-duel","photon-revolver","space-drifter","asteroid-saloon",
    "cosmic-lawman","plasma-spurs","orbit-duel","galaxy-wagon",
    "space-ranch","neon-horse","ion-gunslinger","plasma-lasso",
    "quantum-saloon","cyber-cactus","ion-cowboy","android-marshal",
    "neon-dust","asteroid-ranch","starry-trail","cosmic-tumbleweed",
    "robot-outlaw","gravity-canyon","warp-saddle","photon-sheriff",
    "stellar-bounty","cyborg-bandit","galactic-posse","orbital-duel",
    "laser-sunset","quantum-cowpoke","cyber-saloonkeeper","robot-rancher",
    "cosmic-sheriff","ion-posse","plasma-horizon","starlight-saloon",

    "rode","walked","wandered","drifted","marched","escaped","arrived",
    "tracked","hunted","chased","guarded","watched","fired","aimed",
    "waited","crossed","searched","followed","protected","explored",
    "launched","warped","scanned","detected","transmitted","navigated",
    "hovered","glowed","flickered","echoed","shimmered","rumbled",

    "dusty","lonely","ancient","rusty","silent","neon","cosmic","dark",
    "glowing","distant","reckless","fearless","mysterious","radioactive",
    "stellar","forgotten","golden","shadowy","wild","endless",

    "slowly","quickly","quietly","suddenly","boldly","carefully",
    "silently","restlessly","grimly","brightly","strangely"
    ];

    $paragraph = '';

    // paragraph loop * user input
    for($u = 0; $u < $paragraph_count; $u++){

    // paragraph loop
    print '<p class = "output">';
    for($p = 0; $p < rand(6, 12); $p++){
        $sentence = '';
    // sentence loop
        for ($s = 0; $s < rand(8, 20); $s++) {
            $random_index = rand(0, count($word_list) - 1);
            $sentence = $sentence . $word_list[$random_index] . ' ';
        }
            $finished_sentence =  trim(ucfirst($sentence)) . '.  ';
            echo $finished_sentence;
    }
    print '</p>';
    }
    ?>

<script src='main.js'></script>
</body>
</html>