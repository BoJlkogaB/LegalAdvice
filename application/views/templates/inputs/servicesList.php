<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="services" class="form-label">Услуга</label>
    <select class="form-select" name="services" id="services"
            required="">
        <?php foreach ($data['SERVICES'] as $item) {
            echo $item['id'] == $data['DATA']['service_id']
              ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите услугу.
    </div>
</div>
