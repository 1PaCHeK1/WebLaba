<?php
    require_once("server/backend/constantes.php");
    require_once("server/query/select.php");
    require_once("server/backend/connect.php");
  
    session_start();
    if (!$_SESSION['user'] or $_SESSION['user']['status'] != 'admin' ) 
        header('Location: /');
        
    $title = "Список клиентов";
?>

<?php require_once("server/modules/header.php"); ?>

<main>
    <div class="container">
        <h4 class="mt-5">Функции:</h4>  
        <div class="row text-center">
          <div class="col"><a href="./insert_film.php"><button class="btn btn-primary">Добавить фильм</button></a></div>
          <div class="col"><a href="./insert_director.php"><button class="btn btn-primary">Добавить режиссера</button></a></div>
        </div>
        <h4 class="mt-5">Клиенты</h4>
        <div class="row">
          <table class="table table-borderless mt-5">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Имя</th>
                  <th scope="col">Логин</th>
                  <th scope="col">Статус</th>
                  <th scope="col">Почта</th>
                  <th scope="col">Счет</th>
                  <th scope="col">Библиотека</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach(SelectDb($connect, "User") as $item)
                  {
                    echo ("
                      <tr>
                        <th scope=\"row\">".$item['id']."</th>
                        <td>".$item['full_name']."</td>
                        <td>".$item['login']."</td>
                        <td>".$item['status']."</td>
                        <td>".$item['email']."</td>
                        <td>".$item['cost']."</td>
                        <td><a href=\"#\">Перейти</a></td>
                      </tr>
                    ");
                  }
                ?>
              </tbody>
            </table>
          </div>
    </div>
</main>

<?php require_once("server/modules/footer.php"); ?>
