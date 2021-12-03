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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>



    <div class="container" style="text-align: center;">

        <h1>會員註冊</h1>
           
            

        

    </div>
    <div class="container" >
      <form action="./pr-2logintest.php" method="post">
        姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;氏&nbsp;<input type="text" name="lastname"><br>
        名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;子&nbsp;<input type="text"name="firstname"><br>
        縣&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;市&nbsp;<input type="text"name="county"><br>
        鄉鎮市區&nbsp;<input type="text"name="district"><br>
        password<input type="text"name="pwd"><br>
        E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"name="email"><br>
        <input type="submit">   

      </form>


    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>