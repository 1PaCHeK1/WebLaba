<?php
  require_once("server/backend/constantes.php");
  require_once("server/query/select.php");
  require_once("server/backend/connect.php");

  session_start();
  if (!$_SESSION['user'])
      header('Location: /');

  $title = "Мой профиль. Фильмотека";
?>

<?php require_once("server/modules/header.php"); ?>

<main>
    <div class="container">
        <h3>Мой Аккаунт</h3>
        <div class="row">
          <div class="col-4">
            <img class="my-avatar" src="<?= $_SESSION['user']['avatar'] ?>" alt="<?= $_SESSION['user']['avatar'] ?>">
          </div>
          <div class="col-6">
            <h2>Вы: <?= $_SESSION['user']['full_name'] ?></h2>
            <h2>Логин: <?= $_SESSION['user']['login'] ?></h2>
            <h2>Email: <?= $_SESSION['user']['email'] ?></h2>
            <h2>Ваш статус: <?= $_SESSION['user']['status'] ?></h2>
            <div class="row mt-3">
              <div class="col">
                  <a class="btn btn-danger" href="/server/auth/logout.php" class="logout">Выход</a>
                  <a class="btn btn-warning" href="/update.php?model=User&object_id=<?= $_SESSION['user']['id'] ?>" class="logout">Изменить</a>
              </div>
            </div>
          </div>
        </div>
        <h4 class="mt-5">Купленные фильмы:</h4>
        <table class="table table-borderless mt-5">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Название фильма</th>
                <th scope="col">Дата покупки</th>
                <th scope="col">Стоимость &#8381</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach(SelectDb($connect, "Receipt", $where=['user_id' => $_SESSION['user']['id']]) as $item)
                {
                  echo ("<tr>
                          <th scope=\"row\">".$item['id']."</th>
                          <td>".SelectDb($connect, "Film", $where=['id' => $item['film_id']], $start=0, $end=1)[0]['name']."</td>
                          <td>".$item['data']."</td>
                          <td>".$item['price']."</td>
                        </tr>");
                }
              ?>
            </tbody>
          </table>
    </div>
</main>

<?php require_once("server/modules/footer.php"); ?>