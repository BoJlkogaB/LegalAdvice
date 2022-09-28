<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="salary" class="form-label">Зарплата</label>
    <input type="number" class="form-control" name="salary" id="salary"
           required="" value="<?= $data['DATA']['salary'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите зарплату.
    </div>
</div>
