<?php
    require_once("server/backend/constantes.php");
    require_once("server/query/insert.php");
    require_once("server/backend/connect.php");
  
    session_start();
    if (!$_SESSION['user'] or $_SESSION['user']['status'] != 'admin' ) 
        header('Location: /');
        
    $title = "Добавить режиссера";

    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['descript']) && isset($_POST['awards']) )
    {
        InsertDb($connect, "Director", 
            ['first_name' => $_POST['first_name'], 'last_name' => $_POST['last_name'],
             'awards' => $_POST['awards'], 'descript' => $_POST['descript']]);

        header('Location: /admin_panel.php');
    }
?>

<?php require_once("server/modules/header.php"); ?>

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
            
                <form action="insert_director.php" method="POST" class="w-50 mr-auto ml-auto form-reg">
                    <div class="form-group">
                        <label for="first_name">Имя</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Введите имя режиссера">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Фамилия</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Введите фамилию режиссера">
                    </div>
                    <div class="form-group">
                        <label for="awards">Кол-во Достижений</label>
                        <input type="text" class="form-control" id="awards" name="awards" placeholder="Введите кол-во достижений(число)">
                    </div>
                    <div class="form-group">
                        <label for="descript">Биография</label>
                        <textarea class="form-control" id="descript" name="descript" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Создать</button>
                </form>

            </div>
        </div>
    </div>
</main>

<?php require_once("server/modules/footer.php"); ?>
