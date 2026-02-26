<html>
  <head>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sriracha&display=swap" rel="stylesheet">
    <title>In-N-Out Order Ahead</title>
  </head>
  <body>
    <header>
    <img src="https://www.in-n-out.com/ResourcePackages/INNOUT/content/images/logo.svg?package=INNOUT" alt="In-N-Out Logo">
    </header>

    <main>
    <h1>In-N-Out Burger Online Ordering</h1>
<?php 


// output testing
// echo '<pre>For testing purposes: ';
//   print_r($_REQUEST);
// echo '</pre>';


// cost of menu items
$doubledouble_cost = 3.45;
$cheeseburger_cost = 2.40;
$hamburger_cost = 2.10;
$fries_cost = 1.60;
$combo_double_cost = 6.70;
$combo_chs_cost = 5.65;
$combo_ham_cost = 5.35;
$sm_soft_drink_cost = 1.50;
$med_soft_drink_cost = 1.65;
$large_soft_drink_cost = 1.85;
$X_large_soft_drink_cost = 2.05;
$shake_cost = 2.15;
$milk_cost = .99;
$coffee_cost = 1.35;

// variables for storing quantity of items ordered
$doubledouble_qty = $_POST['doubledouble'];
$cheeseburger_qty = $_POST['cheeseburger'];
$hamburger_qty = $_POST['hamburger'];
$fries_qty = $_POST['fries'];
$combo_dbl_qty = $_POST['combo_dbl'];
$combo_chs_qty = $_POST['combo_chs'];
$combo_ham_qty = $_POST['combo_ham'];
$sm_drink_qty = $_POST['sm_drink'];
$m_drink_qty = $_POST['m_drink'];
$l_drink_qty = $_POST['l_drink'];
$xl_drink_qty = $_POST['xl_drink'];
$shake_qty = $_POST['shake'];
$milk_qty = $_POST['milk'];
$coffee_qty = $_POST['coffee'];

$order_subtotal = 0;

// Table
echo "<table cellpadding='8'>
<tr>
<th>Item</th>
<th>Qty</th>
<th>Price</th>
<th>Total</th>
</tr>";

// Double Double
if ($doubledouble_qty > 0){
  $total = $doubledouble_qty * $doubledouble_cost;
  $order_subtotal += $total;
  echo"
  <tr>
  <td><b>Double Double</b></td>  
  <td>Number Ordered:  $doubledouble_qty</td> 
  <td>Cost per Item: $$doubledouble_cost</td>
  <td>Subtotal: $" . number_format(($total), 2) . "</td>
  </tr>";
}


// Cheeseburger
if ($cheeseburger_qty > 0){
    $total = $cheeseburger_qty * $cheeseburger_cost;
    $order_subtotal += $total;
    echo"
    <tr>
    <td><b>Cheeseburger</b></td>
    <td>Number Ordered: $cheeseburger_qty</td>
    <td>Cost Per Item: $" . number_format($cheeseburger_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Hamburger
if ($hamburger_qty > 0){
    $total = $hamburger_qty * $hamburger_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Hamburger</b></td>
    <td>Number Ordered: $hamburger_qty</td>
    <td>Cost Per Item: $ " . number_format($hamburger_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Fries
if ($fries_qty > 0){
    $total = $fries_qty * $fries_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Fries</b></td>
    <td>Number Ordered: $fries_qty</td>
    <td>Cost Per Item: $ " . number_format($fries_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Combo Double
if ($combo_dbl_qty > 0){
    $total = $combo_dbl_qty * $combo_double_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td> <b>Combo Double</b></td>
    <td>Number Ordered: $combo_dbl_qty</td>
    <td>Cost Per Item: $ " . number_format($combo_double_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($combo_dbl_qty * $combo_double_cost), 2) . "</td>
    </tr>";
}


// Cheeseburger Combo
if ($combo_chs_qty > 0){
    $total = $combo_chs_qty * $combo_chs_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Cheeseburger Combo</b></td>
    <td>Number Ordered: $combo_chs_qty</td>
    <td>Cost Per Item: $ " . number_format($combo_chs_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Hamburger Combo
if ($combo_ham_qty > 0){
    $total = $combo_ham_qty * $combo_ham_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Hamburger Combo</b></td>
    <td>Number Ordered: $combo_ham_qty</td>
    <td>Cost Per Item: $ " . number_format($combo_ham_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Small Soft Drink
if ($sm_drink_qty > 0){
    $total = $sm_drink_qty * $sm_soft_drink_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Small Soft Drink</b></td>
    <td>Number Ordered: $sm_drink_qty</td>
    <td>Cost Per Item: $ " . number_format($sm_soft_drink_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Medium Soft Drink
if ($m_drink_qty > 0){
    $total = $m_drink_qty * $med_soft_drink_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Medium Softdrink</b></td>
    <td>Number Ordered: $m_drink_qty</td>
    <td>Cost Per Item: $ " . number_format($med_soft_drink_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Large Soft Drink
if ($l_drink_qty > 0){
    $total = $large_soft_drink_cost * $l_drink_qty;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Large Soft Drink</b></td>
    <td>Number Ordered: $l_drink_qty</td>
    <td>Cost Per Item: $ " . number_format($large_soft_drink_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Extra Large Soft Drink
if ($xl_drink_qty > 0){
    $total = $xl_drink_qty * $X_large_soft_drink_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Extra Large Soft Drink</b></td>
    <td>Number Ordered: $xl_drink_qty</td>
    <td>Cost Per Item: $ " . number_format($X_large_soft_drink_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Shakes
if ($shake_qty > 0){
    $total = $shake_qty * $shake_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Shakes</b></td>
    <td>Number Ordered: $shake_qty</td>
    <td>Cost Per Item: $ " . number_format($shake_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Milk
if ($milk_qty > 0){
    $total = $milk_qty * $milk_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Milk</b></td>
    <td>Number Ordered: $milk_qty</td>
    <td>Cost Per Item: $ " . number_format($milk_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2) . "</td>
    </tr>";
}


// Coffee
if ($coffee_qty > 0){
    $total = $coffee_qty * $coffee_cost;
    $order_subtotal += $total;
    echo "
    <tr>
    <td><b>Coffee</b></td>
    <td>Number Ordered: $coffee_qty</td>
    <td>Cost Per Item: $ " . number_format($coffee_cost, 2) . "</td>
    <td>Subtotal: $" . number_format(($total), 2)
    . "</td>
    </tr>";
}

echo "</table>";


$tax = $order_subtotal * .095;
$grand_total = $order_subtotal + $tax;

echo "<h3>Order Subtotal: $" . number_format($order_subtotal, 2) . "</h3>";
echo "<h3>Tax: <span style='color:red'>$" . number_format($tax, 2) . "</span></h3>";
echo "<h3>Total: $" . number_format($grand_total, 2) . "</h3>";
?>
 </main>
</body>
</html>
