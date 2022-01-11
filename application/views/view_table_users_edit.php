<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <!--            <pre>-->
    <!--            --><?php //echo var_dump($data) ?>
    <!--            </pre>-->
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Пользователь № <?= $data['DATA']['id'] ?> - <?= $data['DATA']['email'] ?></h4>
            <form class="needs-validation" novalidate="" method="post" action="/table_user/update/">
                <div class="row g-3">
                    <div class="d-none">
                        <input type="text" id="id" value="<?= $data['DATA']['id'] ?>">
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="user@example.com"
                               required="" value="<?= $data['DATA']['email'] ?>">
                        <div class="invalid-feedback">
                            Пожалуйста, введите адрес электронной почты.
                        </div>
                    </div>

                    <!--                        Сделать вывод списка ролей, где текущая роль - первая-->
                    <div class="col-12">
                        <label for="role" class="form-label">Роль</label>
                        <select class="form-select" id="role" required="">
                            <option value="">Администратор</option>
                            <option value="">Россия</option>
                            <option value="">Украина</option>
                        </select>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите роль.
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="form-label">Дата обновления</p>
                        <p class="form-control"><?= $data['DATA']['created_at'] ?></p>
                    </div>

                    <div class="col-12">
                        <p class="form-label">Дата обновления</p>
                        <p class="form-control"><?= $data['DATA']['updated_at'] ?></p>
                    </div>
                </div>

                <hr class="my-4">

                <button class="btn btn-success btn-lg btn-block" type="submit">Изменить</button>
                <a class="btn btn-danger btn-lg btn-block text-white"
                   href="/table_user/delete/?id=<?= $data['DATA']['id'] ?>">Удалить</a>
            </form>
        </div>
    </div>
</main>