<?php
    $time_id = round(microtime(true) * 10000);
?>
<div class="card mb-1">
    <div class="card-header" id="heading1">
        <div class="row">
            <div class="col-4 text-center"><img class="card-img_director" src="/assets/img/director1.jpg" alt="Фильм"></div>
            <div class="col-8">
                <div class="row text-center">
                    <h5>
                        Имя режисcера
                    </h5>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Награды: (N)</p>
                    </div>
                    <div class="col-6">
                        <p>Кол-во фильмов: (M)</p>
                    </div>
                </div>
                <div class="row">
                    <table class="table">
                        <tbody>
                          <tr>
                            <th scope="row">№1</th>
                            <td>Фильм1</td>
                          </tr>
                          <tr>
                            <th scope="row">№2</th>
                            <td>Фильм2</td>
                          </tr>
                          <tr>
                            <th scope="row">№3</th>
                            <td>Фильм3</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="row">
                    <div class="col film-btn-flex">
                        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse<?= $time_id ?>" aria-expanded="true" aria-controls="collapse<?= $time_id ?>">Биография</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="collapse<?= $time_id ?>" class="collapse" aria-labelledby="heading1" data-parent="#accordion1">
        <div class="card-body">
            Биография
        </div>
    </div>
</div>