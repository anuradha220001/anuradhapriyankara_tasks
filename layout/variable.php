<?php 
$title = "Exercise3";
include "header.php"?>

<h2> Exercise 3. In class Task variables and Ooeration(variable.php) </h2>
    
<h3> 1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using tag: Hello …., You are welcome to my site. </h3>

<form action = "action.php" method = "post" >
<div class = "row">
    <div class = "col">
    <input type="text" name = "fname" required class="form-control" placeholder="First name"> </div>
    <div class = "col">
    <input type="text" name = "lname" required class="form-control" placeholder="Last name"> </div>
</div>

<div class = "row">
    <div class = "col">
    Birth date: <input type="date" name = "bdate" class="form-control"> </div>
    <div class = "col">
    select fav colour: <input type="color" name = "color" class="form-control"> </div>
    </div>
    <input type ="submit" value ="submit"> 
</form>
<br>
<h2> 3. Prepare a simple html table and apply bootstrap style to the table. </h2>
<table class="table table-bordered"  >
<tr>
<th> S.N. </th> <th> Name </th> <th> Grade </th>
</tr>
<tr>
<td > 1 </td> <td> Pekka </td> <td> 5 </td>
</tr>
<tr>
<td> 2 </td> <td> Johann </td> <td> 4 </td>
</tr>
<tr>
<td> 3 </td> <td> John </td> <td> 5 </td>
</tr>
</table>
<br>
<h2>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  </h2>
<?php
$first_name = "Anuradha";
$last_name = "Priyankara";

echo "My name is $first_name $last_name.";
echo "<br> Lenght of my first name is " .strlen($first_name);
?>
</n>
<h2> 5. Write a script to add up the numbers: 298, 234, 46. </h2>
<?php

$num1 = 298;
$num2 = 234;
$num3 = 46;
echo "Total is " . $num1 + $num2 + $num3; 
?>

<h2>6. Write a PHP script to detect the browser being used to view your pages.</h2>
<?php
$host = $_SERVER['HTTP_USER_AGENT'];
echo $host;
?>

<?php include('footer.php')?>