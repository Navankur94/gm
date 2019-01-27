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

$hero_id=$_POST['hero_id'];
$sql ="UPDATE new_hero SET  `hero_status`='Dead' WHERE `hero_id`='".$hero_id."'";
$res=mysqli_query($con,$sql);
$sql="SELECT * FROM new_hero WHERE `hero_id`!='$hero_id'";
$result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result) > 0)
 {
 	
 	$rows = mysqli_fetch_assoc($result);
 	$hid=$rows['hero_id'];
 	$name=$rows['hero_name'];
 	if($rows['win_score']=='')
 	{
 		$i=0;
 	}
 	else
 	{
 		$i=$rows['win_score'];
 	}
 	$sql ="UPDATE new_hero SET  `win_score`=$i+1 WHERE `hero_id`='".$hid."'";
	$result=mysqli_query($con,$sql);
	echo "".$hid."->".$name." is winner.<br>" ;

 }
echo "<a href='../index.php'>Go Back</a>"
?>