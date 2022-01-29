function validate()
{
var p=document.getElementById("price").value
if (!/^\d*\.?\d*$/.test(p)){
alert("Invalid Price");
}
}
