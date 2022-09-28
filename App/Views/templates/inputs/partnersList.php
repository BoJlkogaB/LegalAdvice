<?php $data = $this->getAll() ?>
<div class="col-12">
    <label for="partner_id" class="form-label">Партнёр</label>
    <select class="form-select" name="partner_id" id="partner_id"
            required="">
        <?php foreach ($data['PARTNERS'] as $item) {
            echo $item['id'] == $data['DATA']['partner_id']
              ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите партнёра.
    </div>
</div>
