<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
<!--            <pre>-->
<!--            --><?php //echo var_dump($data) ?>
<!--            </pre>-->
            <h4 class="mb-3">Роль № <?= $data['DATA']['id'] ?> - <?= $data['DATA']['name'] ?></h4>
            <form class="needs-validation" novalidate="" method="post" action="/table_users/update/">
                <div class="row g-3">
                    <div class="d-none">
                        <input type="text" name="id" value="<?= $data['DATA']['id'] ?>">
                    </div>

                    <div class="col-12">
                        <label for="name" class="form-label">Наименование</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="user@example.com"
                               required="" value="<?= $data['DATA']['name'] ?>">
                        <div class="invalid-feedback">
                            Пожалуйста, введите наименование роли.
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="form-label">Дата создания</p>
                        <p class="form-control"><?= $data['DATA']['created_at'] ?></p>
                    </div>

                    <div class="col-12">
                        <p class="form-label">Дата обновления</p>
                        <p class="form-control"><?= $data['DATA']['updated_at'] ?></p>
                    </div>
                </div>

                <hr class="my-4">

                <input class="btn btn-success btn-lg btn-block" type="submit" value="Изменить">
                <a class="btn btn-danger btn-lg btn-block text-white"
                   href="/table_users/delete/?id=<?= $data['DATA']['id'] ?>">Удалить</a>
            </form>
        </div>
    </div>
</main>