<?php $data = $this->getData() ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Новый пользователь</h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/users/create/">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="email" class="form-label">Почта</label>
                        <input type="email" class="form-control" name="email"
                               id="email" placeholder="user@example.com"
                               required="">
                        <div class="invalid-feedback">
                            Пожалуйста, введите адрес электронной почты.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control"
                               name="password" id="password"
                               required="">
                        <div class="invalid-feedback">
                            Пожалуйста, введите пароль.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="role" class="form-label">Роль</label>
                        <select class="form-select" name="role" id="role"
                                required="">
                            <?php foreach ($data['ROLES'] as $item): ?>
                                <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите роль.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <input class="btn btn-success btn-lg btn-block" type="submit"
                       value="Создать">
            </form>
        </div>
    </div>
</main>