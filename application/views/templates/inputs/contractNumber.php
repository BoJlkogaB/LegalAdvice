<?php $data = $this->getData() ?>
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
