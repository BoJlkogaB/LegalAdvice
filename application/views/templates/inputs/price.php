<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="price" class="form-label">Цена</label>
    <input type="number" class="form-control" name="price" id="price"
           required="" value="<?= $data['DATA']['price'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите цену.
    </div>
</div>
