<?php
    require_once("vendor/backend/constantes.php");
    session_start();
    
    $title = "Список режисеров";
?>

<?php require_once("vendor/modules/header.php"); ?>

<main>
    <div class="container">
        <h3 class="mt-5">Режиссеры:</h3>
        <div class="row">
            <div class="col-9">
                <div id="accordion1">

                    <?php require("vendor/modules/director.php"); ?>
                    <?php require("vendor/modules/director.php"); ?>
                    <?php require("vendor/modules/director.php"); ?>

                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <h5>Сортировать по:</h5>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected>...</option>
                          <option value="1">Популярности</option>
                          <option value="2">Кол-ву фильмов</option>
                          <option value="3">Кол-ву наград</option>
                          <option value="4">Имени</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Выбрать</button>
                        </div>
                    </div>
                    <h5>Введите имя:</h5>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Имя режиссера" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                    </form>
                </div>
                
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

    </div>
</main>

<?php require_once("vendor/modules/footer.php"); ?>