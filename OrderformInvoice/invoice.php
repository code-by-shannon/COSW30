<?php

// random invoice number
$invoice = rand(10000, 99999);
// random feature not listed on form
$features = ["Limited Edition", "Custom Shop", "Factory Special", "Rivera Build"];
$randomFeature = $features[array_rand($features)];

// store form data
$name = $_POST['name'];
$email = $_POST['email'];
$model = $_POST['model'];
$body = $_POST['body'];
$neck = $_POST['neck'];
$pickups = $_POST['pickups'];
$color = $_POST['color'];
// checkbox data check
$addons = isset($_POST['addons']) ? $_POST['addons'] : [];

// model pricing
switch ($model) {
    case "Strat":
        $baseprice = 500;
        break;
    case "Tele":
        $baseprice = 480;
        break;
    case "Mustang":
        $baseprice = 450;
        break;
    case "Jaguar":
        $baseprice = 550;
        break;
    case "Esquire":
        $baseprice = 470;
        break;
}

// images
$images = [
    "Strat" => "imgs/strat.png",
    "Tele" => "imgs/tele.png",
    "Mustang" => "imgs/mustang.png",
    "Jaguar" => "imgs/jag.png",
    "Esquire" => "imgs/esquire.png"
];

$image = $images[$model];

// price tracking
$price = $baseprice;

// add ons pricing (associative array)
$addonPrices = [
    "Locking Tuners" => 50,
    "Premium Pickups" => 120,
    "Hard Case" => 80,
    "Strap" => 20,
    "Custom Finish" => 150,
    "Relic Job" => 200,
    "Coil Split" => 70,
    "Tremolo Upgrade" => 90
];

// add up selected add ons
foreach ($addons as $item) {
    $price += $addonPrices[$item];
}

// discount and tax
$discount = rand(5, 15) / 100; // 5–15%
$discountAmount = $price * $discount;

$tax = ($price - $discountAmount) * 0.08;

$total = $price - $discountAmount + $tax;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">



 

    <!-- HTML Rendering -->
    <h2>Invoice</h2>
    <p>Special Feature: <?= $randomFeature ?></p>
    <p>Name: <?= $name ?></p>
    <p>Email: <?= $email ?></p>
    <p>Model: <?= $model . ' ($' . number_format($baseprice, 2) . ')' ?></p>
    <img class='guitar-img' src='<?= $image ?>' alt='<?= $model ?>'>
    <p>Body: <?= $body ?></p>
    <p>Neck: <?= $neck ?></p>
    <p>Pickups: <?= $pickups ?></p>
    <p>Color: <?= $color ?></p>

    <!-- Loop through add ons and render -->
    <ul>
        <?php
        foreach ($addons as $item) {
            echo "<li>$item - $" . $addonPrices[$item] . "</li>";
        }
        ?>
    </ul>

    <!-- Pricing Render -->
    <div>
        <p>Subtotal: $<?= number_format($price, 2) ?></p>
        <p>Discount: -$<?= number_format($discountAmount, 2) ?></p>
        <p>Tax: $<?= number_format($tax, 2) ?></p>
        <p><strong>Total: $<?= number_format($total, 2) ?></strong></p>
    </div>

    <!-- Build another guitar -->
    <form action="index.php">
        <button type="submit">Build Another Guitar</button>
    </form>
</div>
</body>

</html>