<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="partner" class="form-label">Партнёр</label>
    <select class="form-select" name="partner" id="partner"
            required="">
        <?php foreach ($data['PARTNERS'] as $item) {
            echo $item['name'] == $data['DATA']['name']
              ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите партнёра.
    </div>
</div>
