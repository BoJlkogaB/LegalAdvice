<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="phone" class="form-label">Телефон</label>
    <input type="tel" class="form-control" name="phone"
           id="phone" placeholder="89001112233" required=""
           value="<?= $data['DATA']['phone'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите номер телефона.
    </div>
</div>
