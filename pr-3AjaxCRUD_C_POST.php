<?php
    require("dbTest.php");

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$data = json_decode(file_get_contents("php://input"), true);
$task1 = $data['productName'];
$data = json_decode(file_get_contents("php://input"), true);
$task2 = $data['productClass'];
$data = json_decode(file_get_contents("php://input"), true);
$task3 = $data['productDescription'];
// $pnVal01=$_GET['productName'];
// $pnVal02=$_GET['productClass'];
// $pnVal03=$_GET['productDescription'];

$sql = "INSERT INTO product (productName, productCate, productDiscr)
VALUES ('$task1','$task2', '$task3')";


if ($conn->query($sql) === TRUE) {
    echo $pnVal01."新增成功!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  $conn->close();


?>