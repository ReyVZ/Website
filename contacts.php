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
    </style>
</head>

<body>

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
                    <li><a href="best.php">Лучшие</a></li>
                    <li><a href="all.php">Все</a></li>
                    <li class="active"><a href="contacts.php">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container text-left">
            <h3>По всем вопросам c нами можно связаться по следующим контактам:</h3><br><br>
            <p>Scype: <mark>AVZStudio</mark></p><br>
            <p>E-mail: <mark>avzstudio@example.com</mark></p><br>
            <p>Phone: <mark>+7(000)111-22-33</mark></p><br>
            <p>Facebook: <mark>@avzstudio</mark></p><br>
        </div>
    </div>


    <br><br><br><br><br><br>

    <footer class="container-fluid text-center">
        <p>&copy; AVZ Studio 2017</p>
    </footer>

</body>

</html>
