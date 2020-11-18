<?php
    require_once("server/backend/constantes.php");
    require_once("server/query/select.php");
    require_once("server/backend/connect.php");
    session_start();
    
    $title = "Список режисеров";

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $directors = SelectDb($connect, "Director", $where=NULL, $start=5*$page-5, $end=5*$page);
    
    if($directors == [])
        header("Location: /directors.php?page=".($page > 1 ? $page-1 : 1));

?>

<?php require_once("server/modules/header.php"); ?>

<main>
    <div class="container">
        <h3 class="mt-5">Режиссеры:</h3>
        <div class="row">
            <div class="col-9">
                <div id="accordion1">

                    <?php
                    foreach($directors as $item)
                    {
                        $item['name'] = $item['first_name'].' '.$item['last_name'];
                        $item['films'] = SelectDb($connect, "Film", $where=["director_id" => $item['id']], $start=0, $end=3);
                        
                        require("server/modules/director.php"); 
                    }
                    ?>

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
                    <li class="page-item"><a class="page-link" href="./directors.php?page=<?= $page==1 ? $page : $page-1 ?>">Previous</a></li>
                    <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li> -->
                    <li class="page-item"><a class="page-link" href="./directors.php?page=<?= $page < 100 ? $page+1 : $page ?>">Next</a></li>
                </ul>
            </nav>
        </div>

    </div>
</main>

<?php require_once("server/modules/footer.php"); ?>