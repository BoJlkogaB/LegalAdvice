<?php /** @var array $data * */ ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Партнёр № <?= $data['DATA']['id'] ?>
                - <?= $data['DATA']['name'] ?></h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/partners/update/">
                <div class="row g-3">
                    <div class="d-none">
                        <input type="text" name="id"
                               value="<?= $data['DATA']['id'] ?>">
                    </div>

                    <div class="col-12">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name"
                               id="name" placeholder="user@example.com"
                               required="" value="<?= $data['DATA']['name'] ?>">
                        <div class="invalid-feedback">
                            Пожалуйста, введите имя партнёра.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="phone" class="form-label">Телефон</label>
                        <input type="tel" class="form-control" name="phone"
                               id="phone" placeholder=""
                               required=""
                               value="<?= $data['DATA']['phone'] ?>">
                        <div class="invalid-feedback">
                            Пожалуйста, введите номер телефона партнёра.
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

                <input class="btn btn-success btn-lg btn-block" type="submit"
                       value="Изменить">
                <a class="btn btn-danger btn-lg btn-block text-white"
                   href="/partners/delete/?id=<?= $data['DATA']['id'] ?>">Удалить</a>
            </form>
        </div>
    </div>
</main>