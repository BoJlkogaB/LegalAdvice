<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email"
           id="email" placeholder="user@example.com"
           required=""
           value="<?= $data['DATA']['email'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите адрес электронной почты.
    </div>
</div>