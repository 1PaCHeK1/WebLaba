<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <img class="logo" src="img/logo.png" alt="Logo">
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
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Найти фильм" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                    </form>
                </li>
            </ul>
            
            <a class="nav-link " href="auth/"> <?= isset($_SESSION['user']) ? $_SESSION['user']['full_name'] : 'Войти' ?> </a>

            </div>
        </nav>
    </div>
</header>