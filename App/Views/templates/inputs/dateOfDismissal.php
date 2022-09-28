<?php $data = $this->getAll() ?>
<div class="col-sm-6">
    <label for="date_of_dismissal" class="form-label">Дата
        увольнения</label>
    <input type="date" class="form-control"
           name="date_of_dismissal" id="date_of_dismissal"
           value="<?= $data['DATA']['date_of_dismissal'] ?? null ?>">
</div>
