<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Фильмы</title>
</head>
<body>
    
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>