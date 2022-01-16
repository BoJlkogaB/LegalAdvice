<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="role" class="form-label">Роль</label>
    <select class="form-select" name="role" id="role"
            required="">
        <?php foreach ($data['ROLES'] as $item) {
            echo $item['name'] == $data['DATA']['name']
              ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите роль.
    </div>
</div>
