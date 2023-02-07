<?php include "header.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$color = $_POST['color'];

echo "<h3> Your name is $fname $lname. </h3>"; 
echo "<h3> My birthday is $bdate and my favourite colour is $color</h3>";



?>
<?php include"footer.php"?>