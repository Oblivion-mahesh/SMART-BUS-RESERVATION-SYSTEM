<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
echo" ".$uid." <br>".$pwd;
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
		 

$ret="SELECT * FROM login";
$Result=mysqli_query($conn,$ret);
	while($row=mysqli_fetch_array($Result))
	{
		$Suid=$row['username'];
		$Spwd=$row['password'];
	}
	if($uid!=$Suid && $pwd!=$Spwd)
	{
		echo "<br>All the Entered details dont match";
	}
	else if($uid!=$Suid)
	{
		echo"<br>THE ENETRED USER ID ISN'T VALID";
	}
	else if($pwd!=$Spwd)
	{
		echo"<br>THE ENETRED PASSWORD ISN'T VALID";
	}
	else if($uid!=$Suid && $pwd!=$Spwd)
	{
		echo"<br>THE ENETRED USER ID and the PASSWQORD ISN'T VALID";
	}
else
	{
	echo"<br>".$Suid.",".$user."".$Spwd;
	header('Location:webacc.php');
	}
?>
