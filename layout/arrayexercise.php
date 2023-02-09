<?php $title = "Exercise 5";
include "header.php" ?>


<form action="" method = "get" >

<input type="number" placeholder="Enter your first number" name="num1" required> <br><br>
<input type="number" placeholder="Enter your second number" name="num2" required> <br><br>
<select name="operator">
<option value="add"> Add </option>
<option value="sub"> Substract </option>
<option value="mul"> Multiply </option>
<option value="div"> Devide </option>
</select> <br><br>
<input type ="submit" value ="Calculate" name="cal"> 
</form>

<?php
if (isset($_GET["cal"])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch($operator){
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "mul":
            $result = $num1 * $num2;
            break;
        case "div":
            $result = $num1 / $num2;
            break;
        default:
            $result = "Error : You have not selected the correct operator";
        
        }
        if(isset($result)){
            echo "<h2> Result : $result </h2> <br>";
    }
  }

?>

<h3>1. Write a php script to display courses as list. </h3>
<?php
   $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project"); 

   foreach ($courses as $list) {
   echo "<li>".$list . "</li>";
}
?>

<h3> 2. Deleted 2nd item(HTML) from the array </h3>
<?php

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1["1"]);
print_r($courses1);
?>

<h4> The var_dump() function is used to dump information about a variable </h4>
<?php

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
var_dump($courses1);
?>

<h4> array_values() is an inbuilt function that returns all the values of an array and not the keys </h4>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
print_r(array_values($courses1));
?>

<h3> 3. Sort the following array </h3>
<h4> *  ascending order sort by value </h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
foreach ($courses3 as $value) {
    echo $value . "<br>";}
?>

<h4> *  ascending order sort by key </h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
ksort($courses3);
foreach ($courses3 as $value) {
    echo $value . "<br>";}
?>

<h4> *  descending order sort by Value </h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
arsort($courses3);
foreach ($courses3 as $value) {
    echo $value . "<br>";}
?>

<h4> *  descending order sort by key </h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
krsort($courses3);
foreach ($courses3 as $value) {
    echo $value . "<br>";}
?>

<h3> 4. Change the values to upper case.</h3>
<?php
$courses4=array("php", "html", "javascript", "cms", "project");
foreach ($courses4 as $value) {
    echo  strtoupper($value) . "<br>";
}

?>

<h3> 5. List all your favorite colors and their hexadecimal equivalents </h3>
<?php
$colors = array("yellow" => "#a89444", "green" => "#90e4a9", "red" => "#fd1732", "blue" => "#276df6");
foreach($colors as $x => $x_value){
    echo "Color " . $x . " hexadecimal equivalents is " . $x_value;
    echo "<br>";
}

?>

<h3> 6. Calculation average temperature: </h3>

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

//The explode() function breaks a string into an array.
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
//count of num of temperatures
$temp_array_length = count($temp_array);

$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp.""; 

 // what does sort do?
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}


?>


<?php include "footer.php" ?>