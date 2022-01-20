<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="number" class="form-label">Номер</label>
    <input type="number" class="form-control" name="number"
           id="number"
           required=""
           value="<?= $data['DATA']['number'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите номер.
    </div>
</div>
