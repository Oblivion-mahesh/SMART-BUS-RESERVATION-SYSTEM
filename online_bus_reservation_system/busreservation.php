
<!DOCTYPE html><html>

<body bgcolor="F0F8FF">

<h2 ALIGN="MIDDLE"><font>ONLINE BUS RESERVATION  FORM</h2>

<form method="POST" action="reservation.php"  target="php">
<table>
<tr>
<td width="15%" align="left" class="main_body_text">Bus No;</td>
<td width="35%" align="left" class="main_body_text"><input id="busname" name="text" type="text" size="30"></td>
<td width="15%" align="left" class="main_body_text">Journey Date</td>
<td width="35%" align="left" class="main_body_text"><input name="text1" type="text" size="10"></td>
</tr><br>

<p>
 <tr>
<td width="15%" align="left" class="main_body_text"> Class </td>
<td width="35%" align="left" class="main_body_text">
<select id="maheshkumar" name="select2" style="width: 50px; font-size:10px;">
<option id="op1">SLEEPER</option>
<option selected="selected">AC</option>
<option>NON-AC</option>
</select></td>
<td width="15%" align="left" class="main_body_text">Number of Seat </td>
<td width="35%" align="left" class="main_body_text"><select name="select3" style="width: 50px; font-size:10px;">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select></td>
</tr><br><br>
<tr>
<td width="15%" align="left" class="main_body_text"> Station From</td>
<td width="35%" align="left" class="main_body_text"><input name="text" type="text" size="30"></td>
<td width="15%" align="left" class="main_body_text">To</td>
<td width="35%" align="left" class="main_body_text"><input name="text" type="text" size="30"></td>
</tr><br><br>
<tr>
<td width="15%" align="left" class="main_body_text"> Boarding at </td>
<td width="35%" align="left" class="main_body_text"><input name="text" type="text" size="30"></td>
<td width="15%" align="left" class="main_body_text">Reservation upto</td>
<td width="35%" align="left" class="main_body_text"><input name="text2" type="text" size="30"></td>
</tr>
</form> 

<style>
table, th, td {
border="100";
}
</style>
<table border="10" style="width:70%" align="center">
<tr>
<th>PASSENGER NAME</th>
<th>GENDER</th> 
<th>CONCESSION OR SPECIAL QUOTA NUMBER</th>
<th>Age</th>
<th>PASSENGER CLASS CHOICE</th>
<th>MEALS FOR PASSENGERS
</tr>

<tr>
<td><input name="text" type="text" size="30"></td>
<td> <select name="sex">
<option value="**">**</option>
<option value="M">M</option>
<option value="F">F</option></td>
<td width="23%"><input name="text4" type="text" size="35"></td>
<td><input name="text" type="text" size="10"></td>
<td><select name="select5" style="width: 80px; font-size:10px;">
<option selected="selected">--</option>
<option>AC</option>
<option>NON-Ac</option>
</select></td>
<td width="10%"><strong>
<select name="select6" style="width: 90px; font-size:10px;">
<option>--</option>
<option>Veg.</option>
<option>Non Veg.</option>
</select>
</strong></td>
</tr>

<tr>
<td><input name="text" type="text" size="30"></td>
<td><select name="sex">
<option value="**">**</option>
<option value="M">M</option>
<option value="F">F</option>
</td>

<td width="23%"><input name="text4" type="text" size="35"></td>
<td><input name="text" type="text" size="10"></td>
<td><select name="select5" style="width: 80px; font-size:10px;">
<option selected="selected">--</option>
<option>AC</option>
<option>NON-AC</option>
</select></td><td width="10%"><strong>

<select name="select6" style="width: 90px; font-size:10px;">
<option>--</option>
<option>Veg.</option>
<option>Non Veg.</option>
</select>
</strong></td>
</tr>

<tr>
<td><input name="text" type="text" size="30"></td>
<td><select name="sex">
<option value="**">**</option>
<option value="M">M</option>
<option value="F">F</option></td>
<td width="23%"><input name="text4" type="text" size="35"></td>
<td><input name="text" type="text" size="10"></td>
<td><select name="select5" style="width: 80px; font-size:10px;">
<option selected="selected">--</option>
<option>AC</option>
<option>NON-AC</option>
</select></td>
<td width="10%"><strong>
<select name="select6" style="width: 90px; font-size:10px;">
<option>--</option>
<option>Veg.</option>
<option>Non Veg.</option>
</select>
</strong></td>
</tr>

<tr>
<td width="25%"><strong><input name="text" type="text" size="30"></td>
<td width="10%"><strong><select name="sex">
<option value="**">**</option>
<option value="M">M</option>
<option value="F">F</option></td>
<td width="23%"><input name="text4" type="text" size="35"></td>
<td width="10%"><strong><input name="text" type="text" size="10"></td>
<td width="10%"><strong><select name="select5" style="width: 80px; font-size:10px;">
<option selected="selected">--</option>
<option>AC</option>
<option>NON-AC</option>
</select></td>

<td>
<strong>
<select name="select6" style="width: 90px; font-size:10px;">
<option>--</option>
<option>Veg.</option>
<option>Non Veg.</option>
</select>
</strong></td>
</tr>
</table>
<br>
<br><td  align="center" style="color:#000000; background-color:#CCCCCC"><strong>CHILDREN BELOW 5 YEARS (FOR WHOM TICKET IS NOT TO BE  ISSUED)</strong></td>
<br>
<br>
<style>
table, th, td {
border: 0.1px solid black;
}
</style>


<table align="center" style="width:60%">
<tr>
<th>S.No</th>
<th>Name of child (not more than 15 letters)</th> 
<th>GENDER</th>
<th>AGE</th>
</tr>
<tr>
<td width="5%">1.</td>
<td width="23%"><input name="text4" type="text" size="35"></td>
<td> <select name="sex">
<option value="**">**</option>
<option value="M">M</option>
<option value="F">F</option></td>
<td><input name="text" type="text" size="10"></td>
</tr>
<tr>
<td width="5%">2.</td>
<td width="23%"><input name="text4" type="text" size="35"></td>
<td> <select name="sex">
<option value="**">**</option>
<option value="M">M</option>
<option value="F">F</option></td>
<td><input name="text" type="text" size="10"></td></tr>
<tr>
<td width="5%">3.</td>
<td width="23%"><input name="text4" type="text" size="35"></td>
<td> <select name="sex">
<option value="**">**</option>
<option value="M">M</option>
<option value="F">F</option></td>
<td><input name="text" type="text" size="10"></td></tr>

<tr>
<td width="5%">4.</td>
<td width="23%"><input name="text4" type="text" size="35"></td>
<td><select name="sex">
<option value="**">**</option>
<option value="M">M</option>
<option value="F">F</option></td>
<td><input name="text" type="text" size="10"></td></tr>
</table>
<br>
<br>

<strong> ONWARD/RETURN JOURNEY DETAILS </strong><br>
<tr>
<td width="13%" align="left" class="main_body_text"> bus No &amp; </td>
<td width="20%" align="left" class="main_body_text"><input name="text5" type="text" size="30"></td>
<td width="14%" align="left" class="main_body_text">Date of journey</td>
<td width="14%" align="left" class="main_body_text"><input name="text5" type="text" size="10"></td>
<td width="5%" align="left" class="main_body_text">Class </td>
<td width="34%" align="left" class="main_body_text"><select name="select19" style="width: 50px; font-size:10px;">
<option selected="selected">sleeper</option>
<option>AC</option>
<option>Non-AC</option>
</select></td>
</tr><br><br>
<tr>
<td width="13%" align="left" class="main_body_text"> bus Station From</td>
<td colspan="2" align="left" class="main_body_text"><input name="text5" type="text" size="30"></td>
<td width="14%" align="left" class="main_body_text">To</td>
<td colspan="2" align="left" class="main_body_text"><input name="text5" type="text" size="30"></td>
</tr><br><br>
<tr>
<td width="13%" align="left" class="main_body_text"> Name of applicant </td>
<td colspan="2" align="left" class="main_body_text"><input name="text5" type="text" size="30"></td>
<td width="14%" align="left" class="main_body_text">Full Address</td>
<td colspan="2" align="left" class="main_body_text"><input name="text22" type="text" size="50"></td>
</tr><br><br>
<tr class="main_body_text">
<td><strong>Signature of the Applicant/Representative ______________________</strong></td>
</tr><br><br>
<tr class="main_body_text">
<td width="13%" align="left" class="main_body_text"> Telephone No., if any</td>
<td width="20%" align="left" class="main_body_text"><input name="text5" type="text" size="30"></td>
<td width="14%" align="left" class="main_body_text">Date </td>
<td width="14%" align="left" class="main_body_text"><input name="text5" type="text" size="10"></td>
<td width="5%" align="left" class="main_body_text">Time </td>
<td width="34%" align="left" class="main_body_text"><input name="text342" type="text" size="5">
:
<input name="text343" type="text" size="5">
:
<select name="select20" style="width: 50px; font-size:10px;">
<option>AM</option>
<option>PM</option>
</select></td>
</tr><br><br>
<strong> FOR OFFICE USE ONLY </strong><br><br>
<tr>
<td width="38%" align="left" class="main_body_text"> S.No. of Requistion_______________________ </td>
<td width="62%" colspan="5" align="right" class="main_body_text">BUS BACK No._______________________</td>
</tr><br><br>
<tr>
<td width="38%" align="left" class="main_body_text">Seat No._______________ </td>
<td width="62%" colspan="5" align="left" class="main_body_text">Amount collected ________________ </td>
</tr><br><br><br><br>
<tr>
<td width="8%" align="left" class="main_body_text" valign="top"> <strong>NOTE :</strong> </td>
<td width="92%" align="left" class="main_body_text"> 1.Maximum permissible passengers is 6 per requisition.<br>
2. One person can giFve one requisition form  at a time. <br>
3. Please check your ticket and balance amount before leaving the window.<br>
4. Forms not properly filled or in illegible forms shall not be entertained.<br>
5. Choice is subject to availability<br></td>
</tr>
<br><br>
<td><input id="sub" type="submit" value="submit"></td>
<br><br>
<td><a href="main.php.php">GO BACK TO HOME</a></td>
</table>

</form>

</body>
</html>
