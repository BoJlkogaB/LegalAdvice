<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="date_of_singing" class="form-label">Дата
        заключения</label>
    <input type="text" class="form-control"
           name="date_of_singing" id="date_of_singing"
           required="" placeholder="ГГГГ-ММ-ДД"
           value="<?= $data['DATA']['date_of_singing'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите дату заключения договора.
    </div>
</div>
