

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="minimum-scale=1"/> -->
    <title>NerdAlert</title>

    <link rel="stylesheet" href="./scss/main.css">
    <script src="https://kit.fontawesome.com/5c079223e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kufam">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inder">
    <link rel="icon" href="./img/favico/Favicon.ico" type="image/ico">
</head>
<body id="body" class="dark" >
    <!-- Nav -->
    <?php @include('./components/nav-top.php') ?>
    
    <!-- Select Page -->
    <div class="container">
        <?php 
            // @include('./pages/news.php');
            // @include('./pages/article.php');

            // @include('./pages/login.php');
            // @include('./pages/forget-password.php');
            // @include('./pages/register.php');
            @include('./pages/encyclopedia.php');
            // @include('./components/loading.php');
        ?>
    </div>

    <!-- Bottom Nav -->
    <?php @include('./components/nav-bottom.php') ?>
    <script src="./js/script.js"></script>
</body>
</html>