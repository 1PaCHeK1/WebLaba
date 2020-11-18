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
                        <?= $item['name']; ?>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Награды: <?= $item['awards']; ?></p>
                    </div>
                    <div class="col-6">
                        <p>Кол-во фильмов: <?= count($item['films']); ?></p>
                    </div>
                </div>
                <div class="row">
                    <table class="table">
                        <tbody>
                          <?php
                            $i = 1;
                            foreach($item['films'] as $film)
                            {
                              echo ("<tr>
                                      <th scope=\"row\">№".$i++."</th>
                                      <td>".$film['name']."</td>
                                    </tr>");
                            }
                          ?>
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
            <?= $item['descript']; ?>
        </div>
    </div>
</div>