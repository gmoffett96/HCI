<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
h1 {
    text-align: center;
}

h2 {
  text-align: center;
  font-size: 50px;
}

h4 {
    color: lightgreen;
}

th {
  text-align: center;
  font-size: 20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: lightblue;
  padding: 40px;
  font-size: 30px;
}

li {
  display: inline;
}

.right {
  background-color: black;
  color: white;
}
</style>

<h1>Order Complete!<h1>
<h3>Your order has been processed and will be sent to you in 5-7 workdays<h3>
<h3>Your order contains the following items:</h3>

<?php
if (isset($_SESSION["Blanket"])) {
    if ($_SESSION["Blanket"] == 1)
    {
        echo "<h4> You have " . $_SESSION["Blanket"] . " Blanket in your order";
    }
}
if (isset($_SESSION["Car"])) {
  if ($_SESSION["Car"] == 1)
  {
      echo "<h4> You have " . $_SESSION["Car"] . " Car in your order";
  }
}
if (isset($_SESSION["ExercisingMat"])) {
  if ($_SESSION["ExercisingMat"] == 1)
  {
      echo "<h4> You have " . $_SESSION["ExercisingMat"] . " Exercising Mat in your order";
  }
}
if (isset($_SESSION["Hose"])) {
  if ($_SESSION["Hose"] == 1)
  {
      echo "<h4> You have " . $_SESSION["Hose"] . " Hose in your order";
  }
}
if (isset($_SESSION["House"])) {
  if ($_SESSION["House"] == 1)
  {
      echo "<h4> You have " . $_SESSION["House"] . " Housein your order";
  }
}
if (isset($_SESSION["MacKeyboard"])) {
  if ($_SESSION["MacKeyboard"] == 1)
  {
      echo "<h4> You have " . $_SESSION["MacKeyboard"] . " MacKeyboard in your order";
  }
}
if (isset($_SESSION["Pencil"])) {
  if ($_REQUEST["Pencil"] == 1)
  {
      echo "<h4> You have " . $_SESSION["Pencil"] . " Pencil in your order";
  }
}
if (isset($_SESSION["Venus"])) {
  if ($_SESSION["Venus"] == 1)
  {
      echo "<h4> You have " . $_SESSION["Venus"] . " Venus in your order";
  }
}
if (isset($_SESSION["Address"])) {
  $Address = $_SESSION["Address"];
  echo "hello";
  echo $_Address;
  echo "<h4> The address that this order will be shipped to is " . $Address . "</h4>";
}
?>

<h4><a href="assign03.php">Continue Shopping?</a></h4>

</body>
</html>