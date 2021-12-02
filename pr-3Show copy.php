<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        table tr td{
            border:solid 1px black;
        }
        </style>
</head>

<body>
    <div class="container" style="text-align: center;">
        
        <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$pn=$_POST["pn"];
$pc=$_POST["pc"];
$pd=$_POST["pd"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO product (productName, productCate, productDiscr)
VALUES ('$_POST[pn]','$_POST[pc]', '$_POST[pn]')";
        
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {    
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM product  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>";
    echo "<tr>"."<td>"."商品id "."</td>"."<td>" . " 商品名稱 " ."</td>" . "<td>" . "商品類別" . " </td>"."<td>"."商品概述"."</td>"."</tr>" ;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>". $row["productId"] ."</td>"."<td>".$row["productName"]."</td>"."<td>". $row["productCate"]. "</td>"."<td>".$row["productDiscr"]."</td>"."</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();

?>



</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>