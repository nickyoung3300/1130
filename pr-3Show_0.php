            <!-- CRUD-C 連線資料庫新增   -->
            <?php
        if (isset($_POST["pn"]) && $_POST["pn"]!="") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";
            $pn = $_POST["pn"];
            $pc = $_POST["pc"];
            $pd = $_POST["pd"];
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "INSERT INTO product (productName, productCate, productDiscr)
            VALUES ('$_POST[pn]','$_POST[pc]', '$_POST[pd]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location:http://127.0.0.1/dashboard/1130/pr-3Show.php");

}



?>
<!-- CRUD-C 連線資料庫新增   -->