
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><META http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>



<div>
<form method="POST" action="registration.php" onsubmit="try {return window.confirm(&quot;You are submitting information to an external page.\nAre you sure?&quot;);} catch (e) {return false;}">
<table border="0" bgcolor="#cccc99" height="200px" width="70%" align="center">

<tr valign="top" style="height:40px">
<td colspan="4"><center><h2> Welcome to the sign up page</h2></center></td>
</tr>

<tr>
<td>First Name </td>
<td><input  type="text" name="fn" size="15" maxlength="15"></td>
<td>Last Name</td> 
<td><input  type="text" name="ln" size="15" maxlength="15"></td>
</tr>

<tr>
<td>User Name</td>
<td colspan="3"><input id="mmk1" type="text" name="usr" size="15" maxlength="15" required></td>
</tr>

<tr>
<td>Password</td>
<td colspan="3"><input id="mmk2" type="password" name="pass" size="15" maxlength="10" required> max 15 chars</td>
</tr>

<tr>
<td>Confirm Password</td>
<td colspan="3"><input type="password" name="cpwd" size="15" maxlength="10"></td>
</tr>

<tr style="height:40px">
<td>Sex</td>
<td colspan="3"><input type="radio" name="sex" value="male" checked>Male<input type="radio" name="sex" value="female"> Female</td>
</tr>





<tr>
<td> Telephone No.</td>
<td> <input type="text" name="phone" size="15" maxlength="13"></td>
</tr>


<tr>
<td colspan="1" style="height:40px">Select a Question </td>
<td colspan="2">

<select name="question">
<option value="0">what is your pet&#39;s name</option>
<option value="1">what is your mother&#39;s maiden name</option>
<option value="2">who is your best childhood friend</option>
</select>

</td>
</tr> 

<tr>
<td> </td>
<td colspan="3"><textarea rows="3" cols="40" name="ans">   </textarea></td>
</tr>
<td>Alternate Email</td>
<td colspan="3"><input type="text" name="altemail" size="15" maxlength="25">      If any, for password recovery</td>




<tr style="height:30px">
<td colspan="4"><input type="checkbox" name="accept" value="1"> I Accept the terms</td>
</tr>

<tr>
<tr style="height:40px">
<td colspan="4"><center><input id="mmk3" type="submit" value="Submit"></center></td>
</tr>
</tr>
</form>
<tr><td>
<a href="signinup.php">GO BACK TO HOME PAGE</a>
</tr></td>
</table>


</div>

</body></html>