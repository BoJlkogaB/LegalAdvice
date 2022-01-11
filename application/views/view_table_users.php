<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Word</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-calendar">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                All time
            </button>
        </div>
    </div>

    <!--            <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="3090" height="1304"-->
    <!--                    style="display: block; height: 652px; width: 1545px;"></canvas>-->

    <h2>Таблица "Пользователи"</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Почта</th>
                <th>Роль</th>
                <th>Дата создания</th>
                <th>Дата изменения</th>
                <th><a class="text-decoration-none" href="/table_users/create/">Создать</a></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['DATA'] as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['email'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['created_at'] ?></td>
                    <td><?= $item['updated_at'] ?></td>
                    <td><a class="text-decoration-none"
                           href="/table_users/edit/?id=<?= $item['id'] ?>">Редактировать</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>