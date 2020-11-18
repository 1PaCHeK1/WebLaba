<?php
    require_once("server/backend/constantes.php");
    require_once("server/backend/connect.php");
    require_once("server/query/insert.php");
    require_once("server/query/select.php");
  
    session_start();
    if (!$_SESSION['user'] or $_SESSION['user']['status'] != 'admin' ) 
        header('Location: /');
        
    $title = "Добавить фильм";

    if(isset($_POST['name']) && isset($_POST['director_id']) && isset($_POST['data']) && isset($_POST['descript']) )
    {
        InsertDb($connect, "Film", 
            ['name' => $_POST['name'], 'director_id' => $_POST['director_id'],
             'data' => $_POST['data'], 'price' => $_POST['price'], 'descript' => $_POST['descript']]);

        header('Location: /admin_panel.php');
    }
?>

<?php require_once("server/modules/header.php"); ?>


<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
            
                <form action="insert_film.php" method="POST" class="w-50 mr-auto ml-auto form-reg">
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Введите название фильма">
                    </div>
                    <div class="form-group">
                        <label for="director_id">Режиссер</label>
                        <select class="form-control" id="director_id" name="director_id">
                            <?php
                                foreach(SelectDb($connect, "Director") as $item)
                                    echo "<option value=\"".$item['id']."\">".$item['first_name']." ".$item['last_name']."</option>";
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data">Дата выхода</label>
                        <input class="form-control" type="date" id="data" name="data" placeholder="Введите дату выхода">
                    </div>
                    <div class="form-group">
                        <label for="price">Стоимость фильма</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Введите число">
                    </div>
                    <div class="form-group">
                        <label for="descript">Описание</label>
                        <textarea class="form-control" id="descript" name="descript" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Создать</button>
                </form>

            </div>
        </div>
    </div>
</main>

<?php require_once("server/modules/footer.php"); ?>