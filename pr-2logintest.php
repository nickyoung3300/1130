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



    <div class="container" style="text-align: center;">


            <div class="header1">自然生態</div>
            

        

    </div>
    <div class="container" style="text-align: center ; font-size:50px;">
    <?php
    $firstName=$_POST["firstname"];
    $lastName=$_POST["lastname"];
    $county=$_POST["county"];
    $district=$_POST["district"];
    echo"<h2>"."歡迎".$lastName."先生/女士"."</h2>";
    echo"<h2>"."歡迎".$firstName."</h2>";
    echo"<h2>"."歡迎居住在".$county."縣/市"."的".$district."</h2>";





    ?>
    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>