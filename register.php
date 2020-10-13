<?php
    require_once("vendor/backend/constantes.php");
    session_start();
    if (isset($_SESSION['user']) and $_SESSION['user'])
        header('Location: profile.php');
    $title="Регистрация";
?>

<?php require_once("vendor/modules/header.php"); ?>

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
            
                <form class="w-50 mr-auto ml-auto form-reg">
                    <div class="form-group">
                        <p class="msg none"></p>
                    </div>
                    <div class="form-group">
                        <label for="full_name">Ваше имя</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Введите свое полное имя">
                    </div>
                    <div class="form-group">
                        <label for="login">Логин</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Введите свой логин">
                    </div>
                    <div class="form-group">
                        <label for="email">Почта</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@mail.ru">
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Подтверждение пароля</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar">
                            <label class="custom-file-label" for="avatar">Изображение профиля</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning register-btn">Зарегистрироваться</button>
                </form>

            </div>
        </div>
    </div>
</main>
    
<?php require_once("vendor/modules/footer.php"); ?>
