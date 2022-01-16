<?php /** @var array $data * */ ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Договор № <?= $data['DATA']['id'] ?>
                - <?= $data['DATA']['number'] ?></h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/contracts/update/">
                <div class="row g-3">
                    <div class="d-none">
                        <input type="text" name="id"
                               value="<?= $data['DATA']['id'] ?>">
                    </div>

                    <div class="col-12">
                        <label for="partner" class="form-label">Партнёр</label>
                        <select class="form-select" name="partner" id="partner"
                                required="">
                            <?php foreach ($data['PARTNERS'] as $item) {
                                echo $item['name'] == $data['DATA']['name']
                                  ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
                                  : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
                            } ?>
                        </select>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите партнёра.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="number" class="form-label">Номер
                            договора</label>
                        <input type="text" class="form-control" name="number"
                               id="number"
                               required=""
                               value="<?= $data['DATA']['number'] ?>">
                        <div class="invalid-feedback">
                            Пожалуйста, введите номер договора.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="date_of_singing" class="form-label">Дата
                            заключения</label>
                        <input type="text" class="form-control"
                               name="date_of_singing" id="date_of_singing"
                               required="" placeholder="ГГГГ-ММ-ДД"
                               value="<?= $data['DATA']['date_of_singing'] ?>">
                        <div class="invalid-feedback">
                            Пожалуйста, введите дату заключения договора.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <input class="btn btn-success btn-lg btn-block" type="submit"
                       value="Изменить">
                <a class="btn btn-danger btn-lg btn-block text-white"
                   href="/contracts/delete/?id=<?= $data['DATA']['id'] ?>">Удалить</a>
            </form>
        </div>
    </div>
</main>