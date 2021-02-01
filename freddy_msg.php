<?php
include 'conn.php';
$msg = mysqli_real_escape_string($conn, $_POST['msg']);
$sql = "SELECT `reply` FROM `qnr` WHERE `questions` LIKE '%$msg%'";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0)
{
	$row = mysqli_fetch_assoc($res);
	echo $row['reply'];
}
else
{
	echo "Can't catch you pal &#128078;";
}
?>