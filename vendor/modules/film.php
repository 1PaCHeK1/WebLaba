<?php
    $time_id = round(microtime(true) * 10000);
?>
<div class="card mb-1">
    <div class="card-header" id="heading1">
        <div class="row">
            <div class="col-3 text-center"><img class="card-img" src="/assets/img/2.jpg" alt="Фильм"></div>
            <div class="col-9">
                <div class="row">
                    <div class="col text-center">
                        <a href="#">
                            <p>Название фильма</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="#">
                            <p>Режиссер: (Имя)</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Год выпуска: (Дата)</p>
                    </div>
                    <div class="col-6 film-btn-flex">
                        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse<?= $time_id ?>" aria-expanded="true" aria-controls="collapse<?= $time_id ?>">Описание</button>
                        <button class="btn btn-success">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="collapse<?= $time_id ?>" class="collapse " aria-labelledby="heading1" data-parent="#accordion1">
        <div class="card-body">
            Описание фильма
        </div>
    </div>
</div>