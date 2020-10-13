<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if(isset($css_default))
            foreach($css_default as $item)
                echo "<link rel=\"stylesheet\" href=\"$item\">";
        if(isset($css_linked))
            foreach($css_linked as $item)
                echo "<link rel=\"stylesheet\" href=\"$item\">";
    ?>
    <title><?= $title ?></title>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <img class="logo" src="/assets/img/logo.png" alt="Logo">
            <a class="navbar-brand ml-2" href="/">Самый лучший сайт</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Фильмы
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Комедии</a>
                        <a class="dropdown-item" href="#">Ужасы</a>
                        <a class="dropdown-item" href="#">Семейные</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/films.php">Другое</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/directors.php">Режиссеры</a>
                    </li>
                    <li class="nav-item">
                        
                    </li>
                </ul>
                
                <form class="form-inline my-2 my-lg-0 mr-5">
                            <input class="form-control mr-sm-2" type="search" placeholder="Найти фильм" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>

                <?php 
                    if (isset($_SESSION['user']))
                        echo "<a class=\"nav-link btn btn-primary\" href=\"/profile.php\">".$_SESSION['user']['full_name']."</a>";
                    else
                        echo "<button class=\"nav-link btn btn-primary\" type=\"button\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"> Войти </button>"
                ?>
                
            </div>
        </nav>
    </div>
</header>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Авторизация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <p class="msg none"></p>
            </div>
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Введите свой логин">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="login-btn btn btn-primary">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
            </p>
        </form>
      </div>
    </div>
  </div>
</div>