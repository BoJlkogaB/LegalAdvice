<?php $data = $this->getData() ?>
<div class="col-sm-6">
    <label for="date_of_employment" class="form-label">Дата
        трудоустройства</label>
    <input type="date" class="form-control"
           name="date_of_employment" id="date_of_employment"
           required=""
           value="<?= $data['DATA']['date_of_employment'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите дату трудоустройства.
    </div>
</div>
