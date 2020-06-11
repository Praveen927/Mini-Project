var arr=[]; 
var a;
var b;
var sum=0;
function result1()
{
if(document.getElementById("ide5").checked==true)
{
sum=sum+1;
}
else if(document.getElementById("ide6").checked==true)
{
sum=sum+1;
}
else if(document.getElementById("ide7").checked==true)
{
sum=sum+2;
}
else if(document.getElementById("ide8").checked==true)
{
sum=sum+3;
}
else
{
document.getElementById("p2").innerHTML="*Please select any one option";
}
}
function count(a,b)
{
arr.push(a);
var iden="id"+b;
var prop=document.getElementById(iden);
prop.style.backgroundColor="ff0000";
}
function result()
{
if(document.getElementById("ide1").checked==true)
{
sum=sum+1;
}
else if(document.getElementById("ide2").checked==true)
{
sum=sum+2;
}
else if(document.getElementById("ide3").checked==true)
{
sum=sum+3;
}
else if(document.getElementById("ide4").checked==true)
{
sum=sum+1;
}
else
{
document.getElementById("p1").innerHTML="*Please select any one option";
}
result1();
if(arr.length<1)
{
alert("Please select options in all field");
}
else
{
for(var i=0;i<arr.length;i++)
{
sum=sum+arr[i];
}
if(sum<4)
{
alert("Please select options in all field");
}
else{
if (sum<9)
{
window.location.href="low.html";
}
else if(sum>8 && sum<14)
{

window.location.href="medium.html";
}
else
{

window.location.href="high.html";
}
}
}
}















