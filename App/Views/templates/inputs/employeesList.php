<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="employee_id" class="form-label">Сотрудник</label>
    <select class="form-select" name="employee_id" id="employee_id"
            required="">
        <?php foreach ($data['EMPLOYEES'] as $item) {
            echo $item['id'] == $data['DATA']['employee_id']
              ? '<option value="'.$item["id"].'" selected>'.$item["surname"].' '.substr($item["name"],
                0, 2).'. '.' '.substr($item["lastname"], 0, 2).'.'.'</option>'
              : '<option value="'.$item["id"].'">'.$item["surname"].' '.substr($item["name"],
                0, 2).'. '.' '.substr($item["lastname"], 0, 2).'.'.'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите сотрудника.
    </div>
</div>
