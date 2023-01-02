<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?=$title?></title>
    <link rel="canonical" href="<?=$canonical?>">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/main.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <div class="logo_title h3">Crypto Blog</div>
                <div class="logo_subtitle h6">Краткие описания популярных монет</div>
            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>article/add">Add</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>contacts">Contact</a>
                </li>
                <?php if ($user === null){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>auth/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_URL?>auth/registration">Registration</a>
                </li>
                <?php } else { ?>
                <li>
                    <a class="nav-link" href="<?=BASE_URL?>auth/logout">Logout (<?=$user['name']?>)</a>
                </li>
                <?php }
                if (($user != null) && ($user['id_user'] == 1)){?>
                <li>
                    <a class="nav-link" href="<?=BASE_URL?>logs">Logs (for admin only)</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </nav>
    <div class="site-content"></div>
        <div class="container">
            <?=$content?>
        </div>
    <footer class="site-footer">
        <div class="container">
            &copy;PHP
        </div>
    </footer>
</body>

</html>