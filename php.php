<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Image's rating</title>
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>

<body>
  <?php

  $link = new mysqli("localhost", "user", "pass", "test");

  if (isset($_POST["left"])) {
    vote($_SESSION["left"]);
  }

  if (isset($_POST["right"])) {
    vote($_SESSION["right"]);
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

    <div class="wrap">
        <div class="header">
            <h1>Голосуем за лучшую картинку!</h1>
        </div>
        <div class="content">
            <ul>
                <li><img src="images/<?php $a = rand(0, 84); $_SESSION["left"] = $a; echo $a; ?>.jpg" alt="Image"><br>
                    <form action="index.php" method="post">
                        <input type="submit" name="left" value="Оценить!">
                    </form><br><br><br>
                </li>
                <li><img src="images/<?php $b = rand(0, 84); while ($a == $b) { $b = rand(0, 84); } $_SESSION["right"] = $b; echo $b; ?>.jpg" alt="Image"><br>
                    <form action="index.php" method="post">
                        <input type="submit" name="right" value="Оценить!">
                    </form><br><br><br>
                </li>
            </ul>
        </div>
    </div>

    <div class="rating">
        <div class="header">
            <h1>Лидеры</h1>
        </div>
        <div class="ladder">
            <p>1 место:</p>
            <img src="images/<?php echo $arr[0]; ?>.jpg" alt="Image">
        </div>
        <div class="ladder">
            <p>2 место:</p>
            <img src="images/<?php echo $arr[1]; ?>.jpg" alt="Image">
        </div>
        <div class="ladder">
            <p>3 место:</p>
            <img src="images/<?php echo $arr[2]; ?>.jpg" alt="Image">
        </div>

    </div>
</body>

</html>
