<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title> Customer Front End </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.label {
  color: white;
  padding: 8px;
  font-family: Arial;
}
.center {
    position: fixed;
    left: 45%;
    top: 25%;
    margin: -(H/2)px -(W/2)px;
    width: Wpx;
    height: Hpx;
}
.button {
  background-color: #F44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.red {background-color: #f44336;} 
</style>
<script>
function numberValidation() {
var n = document.form.price.value;
var q = document.form.quan.value;
if (isNaN(n) && isNaN(q) {
document.getElementById("price").innerHTML="Please enter Numeric value";
document.getElementById("quan").innerHTML="Please enter Numeric value";
return false;
}
else
{
document.getElementById("numberText").innerHTML="Numeric value is: " + n;
document.getElementById("numberText").innerHTML="Numeric value is: " + q;
return true;
}
}
</script>
</head>
<body>
<form id="formTest" method="get" action="processData">
<style>
body {
  background-image: url('d1.jfif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<table class="center">
<tr>
<td>
<span class="label red">Search Stock</span><br><br>
<select name="stocks" id="stocks" style="width:175px;">
  <option value="dbs">DBS</option>
  <option value="wipro">Wipro</option>
  <option value="amzn">Amazon</option>
  <option value="apl">Apple</option>
</select><br><br>
</td>
</tr>
<tr>
<td>
<span class="label red">Order Type</span><br><br>
<select name="order" id="order" style="width:175px;">
    <option value="lim">Limit</option>
    <option value="mkt">Market</option>
</select><br><br>
</td>
</tr>
<tr>
<td>
<span class="label red">Price</span><br>
<input type="text" id="price" name="price" length="5"><br><br>
</td>
</tr>
<tr>
<td>
<span class="label red">Quantity</span><br>
<input type="text" id="quan" name="quan" length="5"><br><br>
</td>
</tr>
<tr>
<td>
<input type="submit" id="btnSubmit" value="Place Order" class="button"><br>
</td>
</tr>
</table>
</form>
<a href="logout.php"><span class="label red">Logout</span></a>
</body>
</html>