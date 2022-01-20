<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="date_of_birth" class="form-label">Дата
        рождения</label>
    <input type="date" class="form-control"
           name="date_of_birth" id="date_of_birth"
           required=""
           value="<?= $data['DATA']['date_of_birth'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите дату рождения.
    </div>
</div>
