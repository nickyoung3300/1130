<?php
    require("dbTest.php");

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$pnVal01=$_GET['productName'];
$pnVal02=$_GET['productClass'];
$pnVal03=$_GET['productDescription'];

$sql = "INSERT INTO product (productName, productCate, productDiscr)
VALUES ('$pnVal01','$pnVal02', '$pnVal03')";


if ($conn->query($sql) === TRUE) {
    echo $pnVal01."新增成功!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  $conn->close();


?>