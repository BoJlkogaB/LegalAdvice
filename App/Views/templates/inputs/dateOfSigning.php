<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="date_of_singing" class="form-label">Дата
        заключения</label>
    <input type="date" class="form-control"
           name="date_of_singing" id="date_of_singing"
           required=""
           value="<?= $data['DATA']['date_of_singing'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите дату заключения договора.
    </div>
</div>
