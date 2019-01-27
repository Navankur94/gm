<?php
include_once '../connection.php';

function rand_string($length)
{
	$chars = "abcdefghijklmnopqrstuvwxyz";
    return substr(str_shuffle($chars),0,$length);
}
$hero_name=rand_string(5);
$sql ="INSERT INTO new_hero (`hero_name`) VALUES ('".$hero_name."')";
$res=mysqli_query($con,$sql);
echo " '".$hero_name."' Hero Created Succesfully.<br>" ;
echo "<a href='../index.php'>Go Back</a>"

?>