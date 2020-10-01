<?php
session_start();

if (isset($_SESSION['user']) and $_SESSION['user']) {
    header('Location: /profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <form>
        <div class="form-group">
            <p class="msg none"></p>
        </div>
        <div class="form-group">
            <label for="login">Логин</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Введите свой логин">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="login-btn btn btn-primary">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
        </p>
        <p>
            <a href="/">Вернуться на главную страницу</a>
        </p>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>