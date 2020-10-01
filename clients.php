<?php
session_start();
if (!$_SESSION['user'] or $_SESSION['user']['status'] != 'admin' ) {
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

    <title>Список клиентов</title>
</head>
<body>
    
    <?php require_once("vendor/modules/header.php"); ?>

    <main>
        <div class="container">
            <h4 class="mt-5">Клиенты</h4>
            <table class="table table-borderless mt-5">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Счет</th>
                    <th scope="col">Библиотека</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Имя</td>
                    <td>Статус</td>
                    <td>post@mail.ru</td>
                    <td>9999</td>
                    <td><a href="#">Перейти</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Имя</td>
                    <td>Статус</td>
                    <td>post@mail.ru</td>
                    <td>9999</td>
                    <td><a href="#">Перейти</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Имя</td>
                    <td>Статус</td>
                    <td>post@mail.ru</td>
                    <td>9999</td>
                    <td><a href="#">Перейти</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Имя</td>
                    <td>Статус</td>
                    <td>post@mail.ru</td>
                    <td>9999</td>
                    <td><a href="#">Перейти</a></td>
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