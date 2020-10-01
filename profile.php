<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Список купленных фильмов</title>
</head>
<body>
    
    <?php require_once("vendor/modules/header.php"); ?>

    <main>
        <div class="container">
            <h3>Мой Аккаунт</h3>
            <div class="row">
              <div class="col-4">
                <img class="my-avatar" src="<?= "auth/".$_SESSION['user']['avatar'] ?>" alt="">
              </div>
              <div class="col-6">
                <h2>Вы: <?= $_SESSION['user']['full_name'] ?></h2>
                <h2>Логин: <?= $_SESSION['user']['login'] ?></h2>
                <h2>Email: <?= $_SESSION['user']['email'] ?></h2>
                <h2>Ваш статус: <?= $_SESSION['user']['status'] ?></h2>
                <div class="row">
                  <div class="col">
                      <a class="btn btn-danger" href="auth/vendor/logout.php" class="logout">Выход</a>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="mt-5">Купленные фильмы:</h4>
            <table class="table table-borderless mt-5">
                <thead>
                  <tr>
                    <th scope="col">№</th>
                    <th scope="col">Название</th>
                    <th scope="col">Дата покупки</th>
                    <th scope="col">Квитанция</th>
                    <th scope="col">Стоимость &#8381</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Название1</td>
                    <td>01.01.2000</td>
                    <td><a href="#">Квитанция</a></td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Название2</td>
                    <td>01.01.2000</td>
                    <td><a href="#">Квитанция</a></td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Название3</td>
                    <td>01.01.2000</td>
                    <td><a href="#">Квитанция</a></td>
                    <td>100</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </main>

    <?php require_once("vendor/modules/footer.php"); ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>