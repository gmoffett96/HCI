<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
html {
  background-color: black;
  color: white;
  text-align: center;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
h2 {
  text-align: center;
  font-size: 50px;
}
th {
  text-align: center;
  font-size: 20px;
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
</style>
</head>
<body>
    <h1>Cart</h1>

<?php

$numberOfBlankets = 0;
$numberOfCars = 0;
$numberOfExercisingMats = 0;
$numberOfHoses = 0;
$numberOfHouses = 0;
$numberOfMacKeyboards = 0;
$numberOfPencils = 0;
$numberOfVenus = 0;

$total = 0;

if (isset($_SESSION["Blanket"])) {
  $numberOfBlankets = 1;
  $total += 30.00;
}

if (isset($_SESSION["Car"])) {
  $numberOfCars = 1;
  $total += 18000.00;
}

if (isset($_SESSION["ExercisingMat"])) {
  $numberOfExercisingMats = 1;
  $total += 25.00;
}

if (isset($_SESSION["Hose"])) {
  $numberOfHoses = 1;
  $total += 35.00;
}

if (isset($_SESSION["House"])) {
  $numberOfHouses = 1;
  $total += 300000.00;
}

if (isset($_SESSION["MacKeyboard"])) {
  $numberOfMacKeyboards = 1;
  $total += 40.00;
}

if (isset($_SESSION["Pencil"])) {
  $numberOfPencils = 1;
  $total += 1.00;
}

if (isset($_SESSION["Venus"])) {
  $numberOfVenus = 1;
  $total += 5000000000.00;
}

$_SESSION["total"] = $total;

if ($numberOfBlankets == 0)
{

}
else 
{
  echo "<h1>The total number of blankets is " . $numberOfBlankets . "</h1>";
  ?>
  <h1> <a href="Cart.php">(Remove item)</a> </h1>
  <?php
  if (isset($_GET['(Remove item)']))
  {
    $numberOfBlankets = 0;
    header("Refresh: 0");
  }
}
if ($numberOfCars == 0)
{

}
else 
{
  echo "<h1>The total number of cars is " . $numberOfCars . "</h1>";
}
if ($numberOfExercisingMats == 0)
{

}
else 
{
  echo "<h1>The total number of Exercising mats is " . $numberOfExercisingMats . "</h1>";
}
if ($numberOfHoses == 0)
{

}
else 
{
  echo "<h1>The total number of hoses is " . $numberOfHoses . "</h1>";
}
if ($numberOfHouses == 0)
{

}
else 
{
  echo "<h1>The total number of houses is " . $numberOfHouses . "</h1>";
}
if ($numberOfMacKeyboards == 0)
{

}
else 
{
  echo "<h1>The total number of Mac keyboards is " . $numberOfMacKeyboards . "</h1>";
}
if ($numberOfPencils == 0)
{

}
else 
{
  echo "<h1>The total number of Pencils is " . $numberOfPencils . "</h1>";
}
if ($numberOfVenus == 0)
{

}
else 
{
  echo "<h1>The total number of Venus' is " . $numberOfVenus . "</h1>";
}

echo "<h1>Your total is " . $total . "$</h1>";

?>
<form action="Purchase.php">
<input type="submit" value="Continue to checkout" class="btn">
</form>
</body>
</html>