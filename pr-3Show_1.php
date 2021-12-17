        <!-- CRUD-U 連線資料庫修改   -->
        <?php
        if (isset($_POST["pn1"]) && $_POST["pn1"]!="") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";
            
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "UPDATE product SET productName='$_POST[pn1]',productCate='$_POST[pc1]',productDiscr='$_POST[pd1]' WHERE productId='$_POST[pid]'";
            
            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
            $conn->close();
            //header("Location:http://127.0.0.1/dashboard/1130/pr-3Show.php");
            header("location:pr-3Show.php");
        }
        ?>
            <!-- CRUD-U 連線資料庫修改   -->