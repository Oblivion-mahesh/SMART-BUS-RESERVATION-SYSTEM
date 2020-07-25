<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
}
     var y = document.forms["myForm"]["regno"].value;
     if (y == "")
     {
         alert("reg no must be filled out")
return false;
     }
var z = document.forms["myForm"]["email"].value;
    if (z == "") {
        alert("email must be filled out");
        return false;
}

   var m = document.forms["myForm"]["mobno"].value;    
     
     if((m).length < 10) 
{
    alert("Error: please enter a valid mobile number.");
    return false;
}
    else if(isNaN(m)){
     alert("alphabets not allowed");
     return false;
}
/*var reg = /^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]{1,})$/;
var address = document.forms["myForm"]["email"].values;
if (reg.test(address) == false)
{
alert("please enter a valid email adress");
return false;
}
*/

}
function getexcellent()
{
if(document.myForm.excellent.checked)
{
document.myForm.good.checked=false;
document.myForm.average.checked=false;
}
}
function getgood()
{
if(document.myForm.good.checked)
{
document.myForm.excellent.checked=false;
document.myForm.everage.checked=false;
}
}
function getaverage()
{
if(document.myForm.average.checked)
{
document.myForm.good.checked=false;
document.myForm.excellent.checked=false;
}
}

</script>
</head>


<body bgcolor="orange">
<center>
<h1>FEEDBACK FORM</h1>

<form name="myForm" action="compalint1.php" onsubmit="return validateForm()" method="POST">
<table cellspacing="15" border="5">
<tr>
<td>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="fname" autofocus required></td><br>
</tr>
<tr>
<td>BUS NO:&nbsp&nbsp&nbsp &nbsp&nbsp<input type="text" name="regno" required> </td><br>
</tr>
<tr>
<td>E-Mail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="email" required></td><br>
</tr>
<tr>
<td>mob no:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="tel" name="mobno" placeholder="Mobile Number" required></td><br>
</tr>
<tr>
<td>&nbsp&nbsp<textarea rows="5" cols="20" name="comments"
placeholder='Enter comments here'></textarea></td><br>
</tr>
<tr>
<td>
Excellent<input type="radio" name="excellent" onclick="getexcellent()" value="">
Good<input type="radio" name="good" onclick="getkgood()" value="">
Average<input type="radio" name="average" onclick="getaverage()" value="">
</td>
</tr>
<td colapn="2" align="center">
<input type="button" value="submit" onclick="validateForm()"></td>
</table>
</form>
</center>
</body>
</html>
