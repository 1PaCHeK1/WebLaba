<?php
    require_once("vendor/backend/constantes.php");
    session_start();
    if (!$_SESSION['user'] or $_SESSION['user']['status'] != 'admin' ) 
        header('Location: /');
        
    $title = "Список клиентов";
?>

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
