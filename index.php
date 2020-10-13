<?php
    require_once("vendor/backend/constantes.php");
    session_start();

    $title = "Фильмотека. Главная страница";
?>

<?php require_once("vendor/modules/header.php"); ?>

<main>
    <div class="container">
        <h3 class="mt-5">Топ рейтинг:</h3>
        <div class="row">
            <div class="col-9">
                <div id="accordion1">
                    <?php
                        for($i = 0; $i < 10; $i++)
                            require("vendor/modules/film.php");
                    ?>
                </div>
            </div>
            <div class="col-3 advertising">

            </div>
        </div>
    </div>
</main>
        
<?php require_once("vendor/modules/footer.php"); ?>