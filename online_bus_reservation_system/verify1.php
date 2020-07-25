<?php
$uid=$_POST['fn'];
$pwd=$_POST['sj'];
echo" --".$uid." <br>--".$pwd;
$db="mahesh";
		 $con=mysqli_connect("localhost","root","");
		 //Now to check the db connection
		 if(mysqli_connect_errno())
		 {
			 echo"<br>connection failed because of ".mysqli_connect_errno();
		 }
$conn=mysqli_connect("localhost","root","","".$db."");
		 if(mysqli_connect_errno())
		 {
			 echo"<br>connection failed because of ".mysqli_connect_errno();
		 }
		 

$ret="SELECT * FROM reservation";
$Result=mysqli_query($conn,$ret);
	while($row=mysqli_fetch_array($Result))
	{
		$Suid=$row['busnumber'];
		$Spwd=$row['journey'];
	}
	if($uid!=$Suid && $pwd!=$Spwd)
	{
		echo "<br>All the Entered details dont match";
	}
	else if($uid!=$Suid)
	{
		echo"<br>THE ENETRED BUS NUMBER ISN'T VALID";
	}
	else if($pwd!=$Spwd)
	{
		echo"<br>THE ENETRED JOURNEY  DATE ISN'T VALID";
	}
	else if($uid!=$Suid && $pwd!=$Spwd)
	{
		echo"<br>THE ENETRED bus number and the journey date ISN'T VALID";
	}
else
	{
	echo"<br>".$Suid.",".$user."".$Spwd;
	header('Location:cancellation2.php');
	}
?>
