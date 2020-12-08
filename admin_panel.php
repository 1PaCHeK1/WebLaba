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
        <div class="row mt-4">
          <div class="accordion col" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Клиенты
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <table class="table table-borderless mt-5">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Логин</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Почта</th>
                        <th scope="col">Счет</th>
                        <th scope="col">Изменить</th>
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
                              <td><a href=\"/update.php?model=User&object_id=".$item['id']."\">Перейти</a></td>
                            </tr>
                          ");
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Фильмы
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <table class="table table-borderless mt-5">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Название</th>
                        <th scope="col">Режиссер</th>
                        <th scope="col">Дата выхода</th>
                        <th scope="col">Стоимость</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Изменить</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach(SelectDb($connect, "Film") as $item)
                        {
                          echo ("
                            <tr>
                              <th scope=\"row\">".$item['id']."</th>
                              <td>".$item['name']."</td>
                              <td>".$item['director_id']."</td>
                              <td>".$item['data']."</td>
                              <td>".$item['price']."</td>
                              <td>".$item['descript']."</td>
                              <td><a href=\"/update.php?model=Film&object_id=".$item['id']."\">Перейти</a></td>
                            </tr>
                          ");
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Режиссеры
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <table class="table table-borderless mt-5">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Кол-во наград</th>
                        <th scope="col">Биография</th>
                        <th scope="col">Изменить</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach(SelectDb($connect, "Director") as $item)
                        {
                          echo ("
                            <tr>
                              <th scope=\"row\">".$item['id']."</th>
                              <td>".$item['first_name']."</td>
                              <td>".$item['last_name']."</td>
                              <td>".$item['awards']."</td>
                              <td>".$item['descript']."</td>
                              <td><a href=\"/update.php?model=Director&object_id=".$item['id']."\">Перейти</a></td>
                            </tr>
                          ");
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</main>

<?php require_once("server/modules/footer.php"); ?>


