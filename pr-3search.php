<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
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
        display: block;}



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

<?php

$search1=$_POST["search"];
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

$sql = "SELECT * FROM product WHERE productName like '%$search1%'  ";
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
    
</body>
</html>