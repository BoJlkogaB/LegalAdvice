<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="gender" class="form-label">Пол</label>
    <select class="form-select" name="gender" id="gender">
        <?php
        if ($data['DATA']['gender'] ?? false) {
            ?>
            <option value="1" <?= $data['DATA']['gender'] == 1 ? 'selected' : '' ?>>
                Мужской
            </option>
            <option value="2" <?= $data['DATA']['gender'] == 2 ? 'selected' : '' ?>>
                Женский
            </option>
            <?php
        } else {
            ?>
            <option value="1">Мужской</option>
            <option value="2">Женский</option>
            <?php
        } ?>
    </select>
</div>
