<?php
$page_title = "Shannon's Music Shop";
require('includes/header.php');

echo '<div class="main-content">';

echo '<h1>Role Based Access System</h1>';
echo '<h2>Admin, Employee & Customer Access</h2>';
echo '<ul>
        <li><b>Admin:</b><br> 
        username: max@f1.com<br>
        password: xxx</li>

        <li><b>Employee:</b><br> 
        username: chapel@kirk.com<br>
        password: xxx</li>

        <li><b>Customer:</b><br> 
        username: captain@kirk.com<br>
        password: kirk</li>

      </ul>';
echo '</div>';

require('includes/footer.php');
?>