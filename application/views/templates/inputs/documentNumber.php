<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="number" class="form-label">Номер документа</label>
    <input type="text" class="form-control" name="number"
           id="number"
           required=""
           value="<?= $data['DATA']['number'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите номер документа.
    </div>
</div>
