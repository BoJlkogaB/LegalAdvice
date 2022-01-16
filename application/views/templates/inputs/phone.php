<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="phone" class="form-label">Телефон</label>
    <input type="tel" class="form-control" name="phone"
           id="phone" placeholder="" required=""
           value="<?= $data['DATA']['phone'] ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите номер телефона.
    </div>
</div>
