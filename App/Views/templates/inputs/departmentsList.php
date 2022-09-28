<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="department_id" class="form-label">Отдел</label>
    <select class="form-select" name="department_id" id="department_id"
            required="">
        <?php foreach ($data['DEPARTMENTS'] as $item) {
            echo $item['id'] == $data['DATA']['department_id']
              ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите отдел.
    </div>
</div>
