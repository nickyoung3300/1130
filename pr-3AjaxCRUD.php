<?php
require("dbTest.php");

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$pnVal=$_GET['productName'];

$sql = "SELECT * FROM product WHERE productName LIKE '%$pnVal%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "商品id: " . $row["productId"]. " 商品名稱: " . $row["productName"]. "  " ."商品類別:"." " .$row["productCate"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();







?>