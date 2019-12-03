<?php
foreach($_POST['scores'] as $cast){
if($cast == null){ echo "Field(s) cannot be empty"; exit;}
$char = count_chars($cast, 1);
$numbers = array('0','1','2','3','4','5','6','7','8','9');
foreach($char as $v => $f){
if(!(in_array((chr($v)), $numbers))){
echo"Notice: All input must be integer except course name(s)!!! <br />";
exit;
}
}
/*if(!(int)$cast){
echo"Notice: All input must be integer except course name(s)!!! <br />";
exit;
}
else{*/
$score = (int)$cast;
if($cast == '0'){
echo "Are you so dumb to get zero(s)? <br />";
}
else{
if($score >= 70){
$point = 5;
}
else if($score<70 && $score>=60){
$point = 4;
}
else if($score<60 && $score>=50){
$point = 3;
}
else if($score<50 && $score>=45){
$point = 2;
}
else if($score<45 && $score>=40){
$point = 1;
}
else{
$point = 0;
}
$_points[] = $point;
}
}

foreach($_POST['unit'] as $Unit){
if(!(int)$Unit){
echo"Notice: All input must be integer except course name(s)!!! <br />";
exit;
}
else{
$units[] = $Unit;
}
}
$TLU = array_sum($units);


$k = sizeof($units);
for($i=0; $i<$k; $i++){
$tee = array_shift($units);
$haay = array_shift($_points);
$mult[] = $tee*$haay;
}
$TCP = array_sum($mult);

$GPA = $TCP/$TLU;

printf("Your GPA is: %.2f <p>", $GPA);

?>

<a href="app.html"><form><input type="button" value="Back" /></form></a>