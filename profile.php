<?php
  require_once("vendor/backend/constantes.php");
  session_start();
  if (!$_SESSION['user'])
      header('Location: /');

  $title = "Список купленных фильмов";
?>

<?php require_once("vendor/modules/header.php"); ?>

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
            <div class="row">
              <div class="col">
                  <a class="btn btn-danger" href="/vendor/auth/logout.php" class="logout">Выход</a>
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