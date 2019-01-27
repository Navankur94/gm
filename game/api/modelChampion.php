<?php
include_once '../connection.php';
$sql1="SELECT * FROM new_hero ";
$result2=mysqli_query($con,$sql1);
if(mysqli_num_rows($result2) <= 1)
{
	echo " First Create 2 Hero<br>";
	echo "<a href='../index.php'>Go Back</a>";
	die();
}
$score=$_POST['score'];
$name=$_POST['name'];
$sql ="UPDATE new_hero SET  `hero_status`='Dead' WHERE `win_score`!=".$score." OR  win_score IS NULL";
$res=mysqli_query($con,$sql);
echo "".$name."  Become champion.<br>" ;
echo "<a href='../index.php'>Go Back</a>"
?>