<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="series" class="form-label">Серия</label>
    <input type="number" class="form-control" name="series"
           id="series"
           required=""
           value="<?= $data['DATA']['series'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите серию.
    </div>
</div>
