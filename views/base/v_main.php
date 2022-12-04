<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?=$title?></title>
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/main.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <div class="logo_title h3">My Site</div>
                <div class="logo_subtitle h6">About some themes</div>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=add">Add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=contacts">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="site-content"></div>
        <div class="container">
            <?=$content?>
        </div>
    <footer class="site-footer">
        <div class="container">
            &copy;Site about all
        </div>
    </footer>
</body>

</html>