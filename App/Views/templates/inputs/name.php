<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="name"
           class="form-label">Наименование</label>
    <input type="text" class="form-control" name="name"
           id="name"
           required="" value="<?= $data['DATA']['name'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите наименование.
    </div>
</div>
