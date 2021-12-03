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


</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">首頁</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pr-3Show.php" style="font-size:large;    color:deeppink">顯示所有商品</a>
                        
                    </li>
                   

                </ul>
                <form class="d-flex" action="./pr-3search.php" method="post">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        登入 / 註冊
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">登入</a></li>
                        <li><a class="dropdown-item" href="./pr-2signUp.php">註冊</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">查詢帳密</a></li>
                    </ul>
                </li>
            </div>
            
        </div>
    </nav>



    <div class="container" style="text-align: center;">


            <div class="header1">自然生態</div>
            

        

    </div>
    <div class="container" style="text-align: center ; font-size:50px;">
      <form action="./pr-2logintest.php" method="post">
        姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;氏:&nbsp;<input type="text" name="lastname"><br>
        名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;子:&nbsp;<input type="text"name="firstname"><br>
        縣&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;市:&nbsp;<input type="text"name="county"><br>
        鄉鎮市區:&nbsp;<input type="text"name="district"><br>
        <input type="submit">   

      </form>

    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>