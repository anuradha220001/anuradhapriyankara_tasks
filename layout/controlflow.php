<?php $title = "Exercise4";
include "header.php" ?>

<h2>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not: </h2>

<?php
$month = date('F');

if($month == "August"){
    echo ("It's August, so it's still holiday.");
}
else {
    echo ("Not August, this is $month so I don't have any holidays. <br>");
}

?>

<h2> 2. Assign colour red to a variable name $color and check to print one the following responses (if else statement) </h2>

<?php

$color = "red";

if($color == "red"){
    echo ("The color is red.<br>");
}
else {
    echo ("The color is not red.<br>");
}

?>

<h2>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. </h2>
<?php
$marks = 94;

if($marks >= 80){
    echo ("Excellent <br>");
}
elseif($marks >= 70){
    echo ("Great <br>");
}
elseif($marks >= 60){
    echo ("Good <br>");
}
elseif($marks >= 50){
    echo ("Pass <br>");
}
else{
    echo ("Fail <br>");
}

?>

<h2>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.</h2>

<form  method = "post" >
Name : <input type="text" name = "name" required class="form-control" placeholder="Enter Your name">
Age : <input type="text" name = "age" required class="form-control" placeholder="Enter Your Age">
<input type ="submit" value ="submit"> 
</form>
<?php
$name = $_POST['name'];
$age = $_POST['age'];

if ($_POST['age'] < 18){
    echo ("$name, You are $age year old and not eligible for voting.");
}
else {
    echo ("$name, You are $age year old and eligible for voting.");
    
}

?>

<h2> 5. Identifying the browser </h2>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
echo $user_agent ;
echo "<br>";
if (strpos($user_agent,'Chrome') == true){
    echo ("You are using Chrome browser.");
}
elseif (strpos($user_agent,'Edg') == true){
    echo ("You are using Edge browser.");
}
elseif (strpos($user_agent,'Safari') == true){
    echo ("You are using Safari browser.");
}
elseif (strpos($user_agent,'Firefox') == true){
    echo ("You are using Firefox browser.");
}
else{
    echo ("Your browser cannot be identified.");
}
?>

















<?php include('footer.php')?>