<?php $data = $this->getAll() ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <?php
//                $this->render('downloadWord');
                $this->render('downloadExcel');
//                $this->render('downloadPdf');
                ?>
            </div>
<!--            --><?php //$this->render('calendar') ?>
        </div>
    </div>

    <!--            <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="3090" height="1304"-->
    <!--                    style="display: block; height: 652px; width: 1545px;"></canvas>-->

    <div class="input-group mb-3">
        <h2 class="d-block">Таблица "Услуги"</h2>
        <?php $this->render('searchName'); ?>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th><a href="" id="sortID">#</a></th>
                <th>Наименование</th>
                <th>Цена</th>
                <th><a class="text-decoration-none"
                       href="/<?= $this->getModelName() ?>/new/">Создать</a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['DATA'] as $item): ?>
                <tr class="context-menu" data-id="<?= $item['id'] ?>">
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['price'] ?></td>
                    <td><a class="text-decoration-none"
                           href="/<?= $this->getModelName() ?>/edit/?id=<?= $item['id'] ?>">Редактировать</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>