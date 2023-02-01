<?php
$title = "Exercise1";
include "header.php" ?>

    <h3> 3.1 Write a simple PHP script to print your information (Name and your groupid). 
 </h3> 
<?php
//opening tag

echo "Rankiri Pathirage Anuradha <br>";
echo "Team 07";
?>
<h3> 3.2 Write PHP code to display the following message. </h3>
<?php
echo "Hello world! My name is \"David\"";
?>  

<h3> 3.3 Write the PHP code in to display the current date. </h3>
<?php echo date("d.m.Y.") ?>

<h3> 3.4 Variables in php </h3>
<?php
$title1 = "PHP is interesting"; 
echo "<h1>" .$title1 . "</h1>";
?>

<h3> 3.5 creating a table </h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table border='1' >
<tr>
<th> S.N. </th> <th> Name </th> <th> Grade </th>
</tr>
<tr>
<td align='right'> 1 </td> <td> Pekka </td> <td align='right'> $g1 </td>
</tr>
<tr>
<td align='right'> 2 </td> <td> Johann </td> <td align='right'> $g2 </td>
</tr>
<tr>
<td align='right'> 3 </td> <td> John </td> <td align='right'> $g3 </td>
</tr>
</table>
";
?>

<h3> 4 Screen shot of the develepment environment </h3>
<img src="ss.jpg" alt = "screenshot" >


<?php include "footer.php" ?>




