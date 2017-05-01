<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Голосовалка</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        img {
          margin: auto;
        }

    </style>
</head>

<body>

  <!-- ========================SCRIPT============================= -->

<?php

$link = new mysqli("localhost", "user", "pass", "test");

$arr = array(0, 0, 0);
$x = 0;
$sql = "SELECT id FROM Pics ORDER BY rating DESC LIMIT 3";
$result = $link->query($sql);
while ($row = $result->fetch_assoc()) {
  $arr[$x] = $row["id"];
  $x++;
}


$link->close();

?>

  <!-- ========================SCRIPT============================= -->


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand" href="index.php">Голосовалка</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Главная</a></li>
                    <li class="active"><a href="best.php">Лучшие</a></li>
                    <li><a href="all.php">Все</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container text-center">
            <h3>Лучшие картинки сайта:</h3>
        </div>
    </div>

    <div class="container-fluid bg-3 text-center">
        <div class="row">
            <div class="col-sm-4">
                <h3 class="text-success">Первое место:</h3>
                <img src="images/<?php echo $arr[0]; ?>.jpg" class="img-responsive" style="width:50%" alt="Image">
            </div>
            <div class="col-sm-4">
                <h3 class="text-success">Второе место:</h3>
                <img src="images/<?php echo $arr[1]; ?>.jpg" class="img-responsive" style="width:50%" alt="Image">
            </div>
            <div class="col-sm-4">
                <h3 class="text-success">Третье место:</h3>
                <img src="images/<?php echo $arr[2]; ?>.jpg" class="img-responsive" style="width:50%" alt="Image">
            </div>
        </div>
    </div><br>

    <br><br>

    <footer class="container-fluid text-center">
        <p>&copy; AVZ Studio 2017</p>
    </footer>

</body>

</html>
