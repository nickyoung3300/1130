<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
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
        display: block;
    }
    table tr {
        border:1px black solid;
    }
</style>

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
                        <a class="nav-link" href="./ShoppingCart_main.php" style="font-size:1.2rem;    color:deeppink">購物</a>

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



                </li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>

        </div>
    </nav>


    <div class="container">
        <nav class="nav nav-pills nav-fill">
            <a class="nav-link " style="background-color:cornsilk; color:darkgreen;" href="./ShoppingCart_main.php">商品總覽</a>
            <a class="nav-link" style="background-color:while; color:darkgreen;" href="./ShoppingCart_check.php">檢視購物車</a>
            <a class="nav-link" style="background-color:while; color:darkgreen;" href="./ShoppingOrderDetail.php">結帳</a>

        </nav>
    </div>

    <table align="center" width="600"cellspacing="2" style="text-align: center;">
        <tr height="30" bgcolor="#BABA76" align="center">
            <td>商品編號</td>
            <td>商品名</td>
            <td>定價</td>
            <td>購買數量</td>
            <td>進行訂購</td>

        </tr>
        <?php

        require_once("dbTest.php");

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM productstore ";
        $result = $conn->query($sql);

        $total=mysqli_num_rows($result);
        
        for($i=0;$i<$total;$i++){
            $row=mysqli_fetch_assoc($result);
            echo"<form method='post' action='ShoppingCart_notice.php?productId=".
            $row["productId"]."&productName=".urlencode($row["productName"]).
            "&productPrice=".$row["productPrice"].">";

            echo"<tr align='center' bgcolor='#EDEAB1'>";
            echo"<td>".$row["productId"]."</td>";
            echo"<td style='text-align: left;'>".$row["productName"]."</td>";
            echo"<td style='text-align: right';>".$row["productPrice"]."</td>";
            echo"<td><input type='text' name='quantity'size='5'value='1'></td>";
            echo"<td><input type='submit'value='放入購物車'></td>";
            echo"</tr>";
            echo"</form>";

        }
       
        mysqli_free_result($result);

        $conn->close();



        ?>

    </table>








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>