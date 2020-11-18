<?php
    session_start();
    require_once("server/backend/constantes.php");
    require_once("server/query/select.php");
    require_once("server/backend/connect.php");
    $title = "Фильмы";

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $films = SelectDb($connect, "Film", $where=NULL, $start=5*$page-5, $end=5*$page);
    
    if($films == [])
        header("Location: /films.php?page=".($page > 1 ? $page-1 : 1));

?>

<?php require_once("server/modules/header.php"); ?>

<main>
    <div class="container">
        <h3 class="mt-5">Фильмы:</h3>
        <div class="row">
            <div class="col-9">
                <div id="accordion1">
                    <?php
                        foreach($films as $item)
                        {
                            $director = SelectDb($connect, "Director", $where=['id' => $item['director_id']])[0];
                            $item['director'] = $director['first_name'].' '.$director['last_name'];
                            
                            require("server/modules/film.php");
                        }
                    ?>
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
                    <li class="page-item"><a class="page-link" href="./films.php?page=<?= $page==1 ? $page : $page-1 ?>">Previous</a></li>
                    <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li> -->
                    <li class="page-item"><a class="page-link" href="./films.php?page=<?= $page!=100 ? $page+1 : $page ?>">Next</a></li>
                </ul>
            </nav>
        </div>

    </div>
</main>

<?php require_once("server/modules/footer.php"); ?>