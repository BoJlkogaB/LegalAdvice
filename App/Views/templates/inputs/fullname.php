<?php $data = $this->getAll() ?>
<div class="col-sm-4">
    <label for="surname"
           class="form-label">Фамилия</label>
    <input type="text" class="form-control" name="surname"
           id="surname"
           required="" value="<?= $data['DATA']['surname'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите фамилию.
    </div>
</div>

<div class="col-sm-4">
    <label for="name"
           class="form-label">Имя</label>
    <input type="text" class="form-control" name="name"
           id="name"
           required="" value="<?= $data['DATA']['name'] ?? null ?>">
    <div class="invalid-feedback">
        Пожалуйста, введите имя.
    </div>
</div>

<div class="col-sm-4">
    <label for="lastname"
           class="form-label">Отчество</label>
    <input type="text" class="form-control" name="lastname"
           id="lastname" value="<?= $data['DATA']['lastname'] ?? null ?>">
</div>
