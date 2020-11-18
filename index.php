<?php
    require_once("server/backend/constantes.php");
    require_once("server/query/select.php");
    require_once("server/backend/connect.php");
    session_start();

    $title = "Фильмотека. Главная страница";
?>

<?php require_once("server/modules/header.php"); ?>

<main>
    <div class="container">
        <h3 class="mt-5">Топ рейтинг:</h3>
        <div class="row">
            <div class="col-9">
                <div id="accordion1">
                    <?php
                        foreach(SelectDb($connect, "Film", $where=NULL, $start=0, $end=5) as $item)
                        {
                            $director = SelectDb($connect, "Director", $where=['id' => $item['director_id']], $start=0, $end=1)[0];
                            $item['director'] = $director['first_name'].' '.$director['last_name'];
                            require("server/modules/film.php");
                        }
                    ?>
                </div>
            </div>
            <div class="col-3 advertising">

            </div>
        </div>
    </div>
</main>
        
<?php require_once("server/modules/footer.php"); ?>