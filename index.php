<?php

$colors = array('red', 'blue', 'yellow');

echo '<pre>';
echo print_r($colors);
echo '</pre>';

?>

<?php
$batman_universe = array('Batman', 'Catwoman', 'The Joker', 'Commissioner Gordon');

echo "<h2>"
     . $batman_universe[0] 
     . ' and ' 
     . $batman_universe[3] 
     . ' teamed up and defeated ' 
     . $batman_universe[1] 
     . ' and ' 
     . $batman_universe[2]
     . '!'
     . "</h2>";
?>

<?php

$newArr = array('Ritchie', 'Jon', 'Ian', 'Ian', 'Roger');
echo print_r($newArr);
?>