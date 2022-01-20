<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="date_of_issue" class="form-label">Дата
        выдачи</label>
    <input type="date" class="form-control"
           name="date_of_issue" id="date_of_issue"
           required=""
           value="<?= $data['DATA']['date_of_issue'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите дату выдачи.
    </div>
</div>
