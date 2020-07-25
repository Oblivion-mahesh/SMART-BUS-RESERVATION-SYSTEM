<?php
$username=$_POST['usr'];
$password=$_POST['pass'];
$conn=mysqli_connect("localhost","mahesh","","mahesh");
$query="insert into login values('{$username}','{$password}')";
if(mysqli_query($conn,$query))
 echo "inserted";
?>
<td bgcolor="red"><br><a id="home" href="signinup.php">BACK TO HOME PAGE</a>