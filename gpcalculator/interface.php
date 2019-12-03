<html>
<head>
<title>GP - CALCULATOR</title>
</head>
<body>
<div align="center">
<fieldset style="width:600px;margin-top:20pt;">
<legend style="text-transform:uppercase;font-weight:bold;">Gp Calculator</legend>

<?php
if(!(int)$_POST['NoOfCourses']){
echo"Notice: All input must be integer <br />";
exit;
}
if((int)$_POST['NoOfCourses'] > 100){
//echo "Too much number of courses inputed! <br /> It shouldn't be greater than a hundred. ";
echo "Abomination!!!";
exit;
}
?>


<p style="text-transform:uppercase;font-size:10pt;">Enter Number of unit and scores for each course accordingly: </p>
<form method="post" action="calculator.php" >
<table>
<tr>
<td> Course Name: </td>
<td> No of Unit: </td>
<td> Score: </td>
</tr>



<?php


$nCourse =(int)$_POST['NoOfCourses'];
$count = 0;
while ( $count < $nCourse){
echo "<tr>
<td><input type=\"text\" name=\"CourseName[]\" value=\"\" maxlength=\"10\" /></td>
<td><input type=\"text\" name=\"unit[]\" value=\"\" maxlength=\"1\" /></td>
<td><input type=\"text\" name=\"scores[]\" value=\"\" maxlength=\"2\" /></td>
</tr>";
$count++;

}

?>

<tr><td colspan="3" align="right">
<input type="submit" value="Calculate" />
</td></tr>

</table>

</fieldset>
</div>

</body>
</html>
