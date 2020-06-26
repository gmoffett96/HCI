<?php session_start(); 
  if (isset($_POST["Blanket"])) {
    $_SESSION["Blanket"] = true;
  }
  if (isset($_POST["Car"])) {
    $_SESSION["Car"] = true;
  }
  if (isset($_POST["ExercisingMat"])) {
    $_SESSION["ExercisingMat"] = true;
  }
  if (isset($_POST["Hose"])) {
    $_SESSION["Hose"] = true;
  }
  if (isset($_POST["House"])) {
    $_SESSION["House"] = true;
  }
  if (isset($_POST["Pencil"])) {
    $_SESSION["Pencil"] = true;
  }
  if (isset($_POST["MacKeyboard"])) {
    $_SESSION["MacKeyboard"] = true;
  }
  if (isset($_POST["Venus"])) {
    $_SESSION["Venus"] = true;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
html {
  background-color: black;
  color: white;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: black;
}

 td, th {
  border: 1px solid #dddddd;
  text-align: left;
  background-color: black;
  color: white;
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
 
 img {
   width: 100%;
   height: 100%;
 }

.right {
  background-color: black;
  color: white;
}

table {
  width: 95%;
}
</style>

<script>
function myFunction() {
  alert("I am an alert box!");
}
</script>
<body>

<ul>
  <li><a href="Cart.php">View Cart</a></li>
</ul>

<h2>List of Items:</h2>

<table>
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Item description</th>
  </tr>
  <form action="" method="post">
  <tr>
    <td class="right"> <img src="Blanket.jpg" alt="Blanket"> </td>
    <td class="right">$30.00</td>
    <td class="right">Blanket</td>
    <td class="right"> <input type="submit" name="Blanket" value="30.00">
    Add to cart</input> </td>
  </tr>
  </form>
  <form action="" method="post">
  <tr>
    <td class="right"><img src="Car.jpg" alt="Car"></td>
    <td class="right">$18,000.00</td>
    <td class="right">Car</td>
    <td class="right"> <input type="submit" name="Car" value="18000.00">
    Add to cart</input> </td>
  </tr>
  </form>
  <form action="" method="post">
  <tr>
    <td class="right"><img src="ExercisingMat.jpg" alt="Exercising Mat"></td>
    <td class="right">$25.00</td>
    <td class="right">Exercising Mat</td>
    <td class="right"> <input type="submit" name="ExercisingMat" value="25.00">
    Add to cart</input> </td>
  </tr>
  </form>
  <form action="" method="post">
  <tr>
    <td><img src="Hose.jpg" alt="Waterhose" style="height: 100%;
    width: 100%;"></td>
    <td>$35.00</td>
    <td>Hose</td>
    <td> <input type="submit" name="Hose" value="35.00">
    Add to cart</input> </td>
  </tr>
  </form>
  <form action="" method="post">
  <tr>
    <td class="right"><img src="House.jpg" alt="House"></td>
    <td class="right">$300,000.00</td>
    <td class="right">House</td>
    <td class="right"> <input type="submit" name="House" value="300000.00">
    Add to cart</input></td>
  </tr>
  </form>
  <form action="" method="post">
  <tr>
    <td><img src="MacKeyboard.jpg" alt="Mac Keyboard"></td>
    <td>$40.00</td>
    <td>Mac Keyboard</td>
    <td> <input type="submit" name="MacKeyboard" value="40.00">
    Add to cart</input> </td>
  </tr>
  </form>
  <form action="" method="post">
  <tr>
    <td class="right"><img src="Pencil.jpg" alt="Pencil"></td>
    <td class="right">$1.00</td>
    <td class="right">Pencil</td>
    <td> <input type="submit" name="Pencil" value="1.00">
    Add to cart</input> </td>
  </tr>
  </form>
  <form action="" method="post">
  <tr>
    <td><img src="Venus.jpg" alt="Venus"></td>
    <td>$5,000,000,000.00</td>
    <td>Venus</td>
    <td> <input type="submit" name="Venus" value="5000000000.00">
    Add to cart</input> </td>
  </tr>
  </form>
</table>
</form>
</body>
</html>