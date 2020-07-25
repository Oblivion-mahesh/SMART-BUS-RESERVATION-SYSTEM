<?php
$busnumber=$_POST['text'];
$journey=$_POST['text1'];
$conn=mysqli_connect("localhost","mahesh","","mahesh");
$query="insert into reservation values('{$busnumber}','{$journey}')";
if(mysqli_query($conn,$query))
echo "inserted";
?>