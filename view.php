<html>
<head>
<title>DataBase</title>
</head>
<body>
<link rel="stylesheet" href="stylesheet.css">
<header>
<span id="div3"><b>CORONA</b></span><br>
<span id="div4"><b>Quarantine Yourself...</b></span>
<img id="div5" src="https://www.iconpacks.net/icons/2/free-corona-virus-icon-3131-thumb.png" height="150" width="150">
<nav>
<a id="GFG" href="index.html"><span>HOME |</span></a>
<a id="GFG" href="table.html"><span>CORONA VS OTHERS |</span></a>
<a id="GFG" href="statistics.html"><span>STATISTICS |</span></a>
<a id="GFG" href="form.html"><span>SELF TEST |</span></a>
<a id="GFG" href="view.php"><span>DATA BASE</span></a>
</nav></header><hr><br>
<h1 class="span1" style="margin:20px 110px;">&#128073;DO THE FOLLOWING</h1>
<div><p>There is currently no vaccine or treatment for COVID-19. Symptoms of a coronavirus usually go away on their own. If symptoms feel worse than a common cold, contact your doctor. He or she may prescribe pain or fever medication. The FDA is currently advising people to be cautious of websites and stores selling products that claim to prevent, treat or cure COVID-19. Additionally, do not take any form of chloroquine unless it has been prescribed for you by your family doctor and purchased from a legitimate source.<br>
As with a cold or the flu, drink fluids and get plenty of rest. If you are having trouble breathing, seek immediate medical care.</p><hr></div>
<h1 class="span1" style="margin:20px 110px;">&#128073;SELF-TEST DATA BASE</h1>
<aside id="home1" style="float:left;font-size:170%;">
<h1 style="color:red;font-family:Comic Sans MS;">&#127968;<br>S<br>T<br>A<br>Y<br>&#128567;<br>H<br>O<br>M<br>E</h1>
</aside>
<?php
include "database.php";
$sql="SELECT analysis.Name, analysis.Age,analysis.Email,analysis.Time, status.Status FROM analysis INNER JOIN status ON analysis.SNo=status.SNo";
$p=mysqli_query($conn,$sql) or die("<h1 align='center'>"."NO DATABASE FOUND"."</h1>");;
echo "<table style='width:83%;margin-left:55px;' id='home1'>";
echo "<th>"."NAME"."</th>";
echo "<th>"."AGE"."</th>";
echo "<th>"."MAIL ID"."</th>";
echo "<th>"."TIME"."</th>";
echo "<th>"."STATUS"."</th>";
while($p1=mysqli_fetch_array($p))
{
echo "<tr>";
echo "<th>".$p1["Name"]."</th>";
echo "<th>".$p1["Age"]."</th>";
echo "<th>".$p1["Email"]."</th>";
echo "<th>".$p1["Time"]."</th>";
echo "<th>".$p1["Status"]."</th>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
<aside id="home2" style="float:right;font-size:170%;">
<h1 style="color:red;
font-family:Comic Sans MS;">&#129658;<br>S<br>T<br>A<br>Y<br>&#128567;<br>S<br>A<br>F<br>E</h1>
</aside>
<footer>
<hr>
<div>
<img src="https://www.coronavirus.gov.hk/eng/banners/fhb_logo_en.png">
<img src="https://www.coronavirus.gov.hk/eng/banners/chp_logo_en.png">
<img src="https://www.coronavirus.gov.hk/eng/banners/dh_logo.png">
<img src="https://www.who.int/ResourcePackages/WHO/assets/dist/images/logos/en/h-logo-blue.svg" height=100 width=400>
<img src="https://www.coronavirus.gov.hk/eng/banners/nhcprc_logo_en.png" height=100 width=400 align="right">
</div>
</footer>
</body>
</html>



