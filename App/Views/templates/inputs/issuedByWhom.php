<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="issued_by_whom"
           class="form-label">Кем выдано</label>
    <input type="text" class="form-control" name="issued_by_whom"
           id="issued_by_whom"
           required="" value="<?= $data['DATA']['issued_by_whom'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите кем выдан.
    </div>
</div>
