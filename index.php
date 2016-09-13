<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/images/ico_tower.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="автовышки, автовышка, услуги автовышек, Томск, Северск, автовышкин, Автовышкин, услуги автовышек в Томске">
    <meta name="description" content="Услуги автовышек в Томске и Северске">
    <meta name="author" content="6AHK0MAT">

    <link href="css/reset.css" rel="stylesheet" type="text/css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Автовышкин</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

    <![endif]-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!--Фон сайта
    <style>
        body {
            background-image: url(images/0370.png); /* Путь к фоновому изображению */
             }
    </style>
    -->

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

</head>
<body>

<!--Вставляем слайдер-->
<?php
include "slider.php";
?>
<div class="navbar navbar-static-top ">

    <div class="container">
        <div class="navbar-header ">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only">Открыть навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse tower-menu" id="responsive-menu">
            <ul class="nav navbar-nav ">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="price.php">Прайс</a></li>
                    <li><a href="information.php">Информация</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                    <li><a href="zakaz.php">Заказ автовышки</a></li>
            </ul>
        </div>
    </div>
</div>


<?php include "include/avtovyshki.php" ?>

<br>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=tdDUW6zGahwdhrWFZy9E18jaYKI2vwgE&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>

</body>
</html>