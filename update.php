<?php
    require_once("server/backend/constantes.php");
    require_once("server/query/query.php");

    require_once("server/backend/connect.php");

    session_start();

    $model = isset($_GET['model']) ? $_GET['model'] : $_POST['model'];
    $object_id = isset($_GET['object_id']) ? $_GET['object_id'] : $_POST['id'];

    if (!($_SESSION['user']['id'] == $object_id && $model == 'User') && $_SESSION['user']['status'] != 'admin')
    {
        header('Location: /');
    }

    $title = "Изменение ".$model;

    if(isset($_POST['update']))
    {
        $model_fields = [
            "User" => ['users', ['id', 'full_name', 'login', 'email', 'avatar', 'status', 'cost']],
            "UserInsert" => ['users', ['full_name', 'login', 'email', 'password', 'avatar', 'status']],
            "Film" => ['film', ['id', 'name', 'director_id', 'data', 'price', 'descript']],
            "Director" => ['director', ['id', 'first_name', 'last_name', 'awards', 'descript']],
            "Films_Director" => ['films_director', ['film_id', 'director_id']],
            "Receipt" => ['receipt', ['id', 'user_id', 'film_id', 'price', 'data']]
        ];

        $fields = [];

        foreach($model_fields[$model][1] as $field)
        {
            if(isset($_POST[$field]) && $_POST[$field])
                $fields[$field] = $_POST[$field];
        }
        
        UpdateDb($connect, $model, $_POST, $_FILES);
        header('Location: /admin_panel.php');
    }
    if(isset($_POST['delete']))
    {   
        $response = DeleteIdDb($connect, $model, $_POST['id']);
        if($response)
        {
            header('Location: /admin_panel.php');
        }    
        else
        {
            $message = "Сначала удалите все записи, которые ссылаются на данный объект";            
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }

    $object = SelectDb($connect, $model, $where=['id'=> $object_id])[0];
?>

<?php require_once("server/modules/header.php"); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="update.php" enctype="multipart/form-data" method="POST" class="form w-50 mr-auto ml-auto">
                    <?php
                        foreach(array_keys($object) as $field)
                        {
                            if($field == "avatar")
                            {
                                echo ("
                                    <div class=\"custom-file\">
                                        <input type=\"file\" class=\"custom-file-input\" id=\"avatar\" name=\"avatar\">
                                        <label class=\"custom-file-label\" for=\"avatar\">Изображение профиля</label>
                                    </div>
                                ");
                            }
                            else
                            {
                                echo ("
                                    <div class=\"form-group\">
                                        <label for=\"".$field."\">".$field."</label>
                                        <input type=\"text\" class=\"form-control\" id=\"".$field."\" name=\"".$field."\" placeholder=\"".$object[$field]."\">
                                    </div>
                                ");
                            }
                        }
                    ?>
                    
                    <input type="hidden" name="id" value="<?= $object_id ?>">
                    <input type="hidden" name="model" value="<?=$model?>">
                    <input type="hidden" name="update" value="true">                    
                    <button type="submit" class="btn btn-primary ">Изменить <?= $model ?></button>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <form action="update.php" method="POST" class="form w-50 mr-auto ml-auto">
                    <input type="hidden" name="id" value="<?= $object_id ?>">
                    <input type="hidden" name="model" value="<?=$model?>">
                    <input type="hidden" name="delete" value="true">
                    <button type="submit" class="btn btn-danger ">Удалить объект</button>
                </form>
            </div>
        </div>    
    </div>
</main>

<?php require_once("server/modules/footer.php"); ?>
