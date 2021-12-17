<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <style>
        table tr td {
            border: solid 1px black;
        }
        
    body {
        margin-bottom: 0px;
    }

    .header1 {
        font-size: 50px;
    }

    .dropbtn {
        background-color: #3498DB;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #2980B9;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 150px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }

    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="pr-2.php">首頁</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pr-3Show.php" style="font-size:large;    color:deeppink">商品管理</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pr-3ShowAjax.php" style="font-size:large;    color:deeppink">商品管理Ajax</a>
                        
                    </li>
                   

                </ul>
                <form class="d-flex" action="./pr-3search.php" method="post">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>&nbsp; &nbsp; 
                <li class="nav-item dropdown">

                    <?php
                   

                    if(isset($_COOKIE['passed'])){
                        
                        echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                                       role="button" data-bs-toggle="dropdown" aria-expanded="false">'
                                        .$_COOKIE['name'].'</a>';
                        echo'<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                        echo'<li><a class="dropdown-item" href="./pr-2login.php  ">用戶管理</a></li>';
                        echo'<li><a class="dropdown-item" href="./pr-2login.php  ">商品管理</a></li>';
                       
                        echo'<li>
                        <hr class="dropdown-divider">
                        </li>';
                        echo'<li><a class="dropdown-item" href="logout.php">登出</a></li>';
                        echo'</ul>';
                    }else{
                        
                        echo'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        登入 / 註冊
                    </a>';
                        echo'<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                        echo'<li><a class="dropdown-item" href="./pr-2login.php  ">登入</a></li>';
                        echo'<li><a class="dropdown-item" href="./pr-2signUp.php">註冊</a></li>';
                        echo'<li>
                        <hr class="dropdown-divider">
                    </li>';
                        echo'<li><a class="dropdown-item" href="searchPwd.php">查詢帳密</a></li>';
                        echo'</ul>';
                  
                    }




                    ?>


                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        登入 / 註冊
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./pr-2login.php  ">登入</a></li>
                        <li><a class="dropdown-item" href="./pr-2signUp.php">註冊</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">查詢帳密</a></li>
                    </ul> -->
                </li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            </div>
            
        </div>
    </nav>  
    <div class="container" style="text-align: center;">
        <!-- CRUD-R 連線資料庫讀取   -->
        <?php

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
            echo "<tr>" . "<td>" . "商品id " . "</td>" . "<td>" . " 商品名稱 " . "</td>" . "<td>" . "商品類別" . " </td>" . "<td>" . "商品概述" . "</td>" . "</tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>" . "<td>" . $row["productId"] . "</td>" . "<td>" . $row["productName"] . "</td>" . "<td>" . $row["productCate"] . "</td>" . "<td>" . $row["productDiscr"] . "</td>" . "</tr>";
            }
        } else {
            echo "0 results";
        }
        echo "</table>";
        $conn->close();

        
        
        ?>
            <!-- CRUD-R 連線資料庫讀取   -->



            
            


            <!-- CRUD-U 使用者修改欄   -->
            <form action="./pr-3Show_1.php" method="post">
                
                <h3>修改商品</h3>
                商品ID&nbsp;<input type="text" name="pid"><br>
                <br>
                商品名稱&nbsp;<input type="text" name="pn1"><br>
                <br>
                商品類別&nbsp;<input type="text" name="pc1"><br>
                <br>
                商品概述&nbsp;<input type="text" name="pd1"><br>
                <br>
                <input type="submit" value="修改">
                
            </form>
            <!-- CRUD-U 使用者修改欄   -->


            <form action="./pr-3Show_0.php" method="post">
                
                <h3>新增商品</h3>
                
                商品名稱&nbsp;<input type="text" name="pn"><br>
                <br>
                商品類別&nbsp;<input type="text" name="pc"><br>
                <br>
                商品概述&nbsp;<input type="text" name="pd"><br>
                <br>
                <input type="submit" value="新增">
                
            </form>
            <!-- CRUD-C 使用者新增欄   -->


            



</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>