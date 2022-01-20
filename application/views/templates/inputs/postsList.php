<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="post_id" class="form-label">Должность</label>
    <select class="form-select" name="post_id" id="post_id"
            required="">
        <?php foreach ($data['POSTS'] as $item) {
            echo $item['id'] == $data['DATA']['post_id']
              ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите должность.
    </div>
</div>
