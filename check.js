function validate()
{

console.log("Hello");
var p=document.getElementById("price").value
var q=document.getElementById("quan").value


if (!/^\d*\.?\d*$/.test(p)){
alert("Invalid Price");
}

if (p > 0){
alert("Invalid Quantity");
}

}
