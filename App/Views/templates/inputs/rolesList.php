<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="role_id" class="form-label">Роль</label>
    <select class="form-select" name="role_id" id="role_id"
            required="">
        <?php foreach ($data['ROLES'] as $item) {
            echo $item['id'] == $data['DATA']['role_id']
              ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите роль.
    </div>
</div>
