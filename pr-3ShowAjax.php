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


                </ul>
                <form class="d-flex" action="./pr-3search.php" method="post">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>&nbsp; &nbsp;
                <li class="nav-item dropdown">

                    <?php


                    if (isset($_COOKIE['passed'])) {

                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                                       role="button" data-bs-toggle="dropdown" aria-expanded="false">'
                            . $_COOKIE['name'] . '</a>';
                        echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                        echo '<li><a class="dropdown-item" href="./pr-2login.php  ">用戶管理</a></li>';
                        echo '<li><a class="dropdown-item" href="./pr-2login.php  ">商品管理</a></li>';

                        echo '<li>
                        <hr class="dropdown-divider">
                        </li>';
                        echo '<li><a class="dropdown-item" href="logout.php">登出</a></li>';
                        echo '</ul>';
                    } else {

                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        登入 / 註冊
                    </a>';
                        echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                        echo '<li><a class="dropdown-item" href="./pr-2login.php  ">登入</a></li>';
                        echo '<li><a class="dropdown-item" href="./pr-2signUp.php">註冊</a></li>';
                        echo '<li>
                        <hr class="dropdown-divider">
                    </li>';
                        echo '<li><a class="dropdown-item" href="searchPwd.php">查詢帳密</a></li>';
                        echo '</ul>';
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

        <h3>查詢商品</h3>

        商品名稱&nbsp;<input type="text" name="pn" id="pnVal"><br>
        <br>

        <button class="btn btn-outline-success" id="searchProduct">查詢</button>

        <script>
            const searProd = document.getElementById("searchProduct");

            function prA() {
                const pnVal = document.getElementById("pnVal").value;
                console.log(pnVal);
                axios({
                        method: 'get',
                        url: 'http://127.0.0.1/dashboard/1130/pr-3AjaxCRUD.php',
                        'Content-Type': 'application/json',
                        params: {
                            productName: pnVal,
                        }
                    })
                    .then(function(response) {
                        let text = JSON.stringify(response.data).substr(1, JSON.stringify(response.data).length - 6);

                        document.getElementById("ShowHere").innerHTML = text;
                        console.log(JSON.stringify(response.data))
                    });
            }

            searProd.addEventListener("click", prA);
        </script>
        <br>

        <div class="container" id="ShowHere" style="margin-top:20px;">


        </div>

    </div>
    <div class="container" style="text-align: center;">

        <h3>新增商品</h3>

        商品名稱&nbsp;<input type="text" name="pn1" id="pnVal1"><br>
        <br>
        商品類別&nbsp;<input type="text" name="pc1" id="pnVal2"><br>
        <br>
        商品概述&nbsp;<input type="text" name="pd1" id="pnVal3"><br>
        <br>

        <button class="btn btn-warning" id="CreateProduct">新增</button>
        <script>
            const CreateProd = document.getElementById("CreateProduct");

            function prA1() {
                const pnVal1 = document.getElementById("pnVal1").value;
                const pnVal2 = document.getElementById("pnVal2").value;
                const pnVal3 = document.getElementById("pnVal3").value;
                console.log(pnVal3);
                console.log(typeof(pnVal3));

                axios({
                        method: 'get',
                        url: 'http://127.0.0.1/dashboard/1130/pr-3AjaxCRUD_C.php',
                      
                        params: {
                            productName: pnVal1,
                            productClass: pnVal2,
                            productDescription: pnVal3,
                        }
                    }).then((res) => {
                        console.table(res.data)
                    })
                    .catch((error) => {
                        console.error(error)
                    })

            }

            CreateProd.addEventListener("click", prA1);
        </script>
        <br>

        <div class="container" id="ShowHere" style="margin-top:20px;">


        </div>

        <!-- CRUD-C 使用者新增欄   -->

        <!-- CRUD-U 連線資料庫修改   -->


        <?php



        // if (isset($_POST["pn1"]) && $_POST["pn1"]!="") {
        //     $servername = "localhost";
        //     $username = "root";
        //     $password = "";
        //     $dbname = "test";


        //     $conn = new mysqli($servername, $username, $password, $dbname);

        //     if ($conn->connect_error) {
        //         die("Connection failed: " . $conn->connect_error);
        //     }

        //     $sql = "UPDATE product SET productName='$_POST[pn1]',productCate='$_POST[pc1]',productDiscr='$_POST[pd1]' WHERE productId='$_POST[pid]'";

        //     if (mysqli_query($conn, $sql)) {
        //         echo "Record updated successfully";
        //     } else {
        //         echo "Error updating record: " . mysqli_error($conn);
        //     }
        //     $conn->close();
        //     header("Location:http://127.0.0.1/dashboard/1130/pr-3Show.php");
        // }
        ?>
        <!-- CRUD-U 連線資料庫修改   -->

        <!-- CRUD-C 連線資料庫新增   -->
        <?php
        //         if (isset($_POST["pn"]) && $_POST["pn"]!="") {
        //             $servername = "localhost";
        //             $username = "root";
        //             $password = "";
        //             $dbname = "test";
        //             $pn = $_POST["pn"];
        //             $pc = $_POST["pc"];
        //             $pd = $_POST["pd"];

        //             // Create connection
        //             $conn = new mysqli($servername, $username, $password, $dbname);
        //             // Check connection
        //             if ($conn->connect_error) {
        //                 die("Connection failed: " . $conn->connect_error);
        //             }

        //             $sql = "INSERT INTO product (productName, productCate, productDiscr)
        //             VALUES ('$_POST[pn]','$_POST[pc]', '$_POST[pd]')";

        // if ($conn->query($sql) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        // $conn->close();
        // header("Location:http://127.0.0.1/dashboard/1130/pr-3Show.php");
        // }



        ?>
        <!-- CRUD-C 連線資料庫新增   -->


    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>