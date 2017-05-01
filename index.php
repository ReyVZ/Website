<?php session_start(); ?>
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

        form {
          position: relative;
          top: 50px;
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

if (isset($_POST["first"])) {
  vote($_SESSION["first"]);
}
if (isset($_POST["second"])) {
  vote($_SESSION["second"]);
}
if (isset($_POST["third"])) {
  vote($_SESSION["third"]);
}
if (isset($_POST["fourth"])) {
  vote($_SESSION["fourth"]);
}

function vote($x) {
  global $link;
  $sql = "SELECT rating FROM Pics WHERE id = $x";
  $result = $link->query($sql);
  $value = $result->fetch_assoc();
  $current_rating = $value["rating"];
  $current_rating++;
  $sql = "UPDATE Pics SET rating = $current_rating WHERE id = $x";
  $link->query($sql);
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
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="best.php">Лучшие</a></li>
                    <li><a href="all.php">Все</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container text-center">
            <h3>Выбери и проголосуй</h3>
            <p>за <mark>лучшую</mark> картинку на странице</p>
        </div>
    </div>

    <div class="container-fluid bg-3 text-center">
        <div class="row">
            <div class="col-sm-3">
              <form action="index.php" method="post">
                  <input type="submit" name="first" value="Оценить!">
              </form>
                <img src="images/<?php $a = rand(0, 1314); $_SESSION["first"] = $a; echo $a; ?>.jpg" class="img-responsive" style="width:60%" alt="Image">
            </div>
            <div class="col-sm-3">
              <form action="index.php" method="post">
                  <input type="submit" name="second" value="Оценить!">
              </form>
                <img src="images/<?php $b = rand(0, 1314); $_SESSION["second"] = $b; echo $b; ?>.jpg" class="img-responsive" style="width:60%" alt="Image">
            </div>
            <div class="col-sm-3">
              <form action="index.php" method="post">
                  <input type="submit" name="third" value="Оценить!">
              </form>
                <img src="images/<?php $c = rand(0, 1314); $_SESSION["third"] = $c; echo $c; ?>.jpg" class="img-responsive" style="width:60%" alt="Image">
            </div>
            <div class="col-sm-3">
              <form action="index.php" method="post">
                  <input type="submit" name="fourth" value="Оценить!">
              </form>
                <img src="images/<?php $d = rand(0, 1314); $_SESSION["fourth"] = $d; echo $d; ?>.jpg" class="img-responsive" style="width:60%" alt="Image">
            </div>
        </div>
    </div><br>

    <br><br>

    <footer class="container-fluid text-center">
        <p>&copy; AVZ Studio 2017</p>
    </footer>

</body>

</html>
