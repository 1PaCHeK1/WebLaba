<?php
    require_once("vendor/backend/constantes.php");
    session_start();
    
    $title = "Фильмы";
?>

<?php require_once("vendor/modules/header.php"); ?>

<main>
    <div class="container">
        <h3 class="mt-5">Фильмы:</h3>
        <div class="row">
            <div class="col-9">
                <div id="accordion1">
                    
                    <?php require("vendor/modules/film.php"); ?>
                    <?php require("vendor/modules/film.php"); ?>
                    <?php require("vendor/modules/film.php"); ?>
                    <?php require("vendor/modules/film.php"); ?>

                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <h5>Сортировать по:</h5>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="sortValue">
                          <option selected>...</option>
                          <option value="1">Названию</option>
                          <option value="2">Жанрам</option>
                          <option value="3">Году выпуска</option>
                          <option value="4">Рейтингу</option>
                        </select>
                    </div>
                    <h5>Выберите жанр:</h5>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="genreValue">
                          <option selected>...</option>
                          <option value="1">Драма</option>
                          <option value="2">Комедия</option>
                          <option value="3">Ужасы</option>
                          <option value="4">Боевик</option>
                        </select>
                    </div>
                </div>
                <div class="row float-right">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Выбрать</button>
                    </div>
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