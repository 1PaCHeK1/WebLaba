<?php
    session_start();
    if (isset($_SESSION['user']) and $_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form>
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
        <p>
            У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
        </p>
        <p>
            <a href="/">Вернуться на главную страницу</a>
        </p>
    </form>
    
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>