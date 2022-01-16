<?php /** @var array $data * */ ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Новый контракт</h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/contracts/create/">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="partner" class="form-label">Партнёр</label>
                        <select class="form-select" name="partner" id="partner"
                                required="">
                            <?php foreach ($data['PARTNERS'] as $item): ?>
                                <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                            <?php endforeach; ?>
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
                               required="">
                        <div class="invalid-feedback">
                            Пожалуйста, введите номер договора.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="date_of_singing" class="form-label">Дата
                            заключения</label>
                        <input type="text" class="form-control"
                               name="date_of_singing" id="date_of_singing"
                               required="" placeholder="ГГГГ-ММ-ДД">
                        <div class="invalid-feedback">
                            Пожалуйста, введите дату заключения договора.
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