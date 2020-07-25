<?php

$name=$_POST['fname'];
$bus_no=$_POST['regno'];
$EMailid=$_POST['email'];
$mobile_no=$_POST['mobno'];
$comments=$_POST['comments'];
$conn=mysqli_connect("localhost","root","","mahesh");
$query="insert into feedback values('{$name}','{$bus_no}','{$EMailid}',{$mobile_no},'{$comments}')";
if(mysqli_query($conn,$query))
echo "inserted";
?>