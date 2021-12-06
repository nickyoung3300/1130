<?php

require_once("dbTest.php");



$uact=$_POST["uact"];
$userPwd=hash("sha256", $_POST["userPwd"]);



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM persons WHERE FirstName ='$uact' AND userPassword='$userPwd'  ";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
echo "<script>";
echo "alert('請重新確認');";
echo"history.back();";
echo"</script>";
 
  
} else {
  
  $id=mysqli_fetch_object($result)->PersonID;
 
  mysqli_free_result($result);
  $conn->close();

  setcookie("id",$id);
  setcookie("name",$uact);
  setcookie("passed","TRUE");
  header("location:greeting.php");

}


?>