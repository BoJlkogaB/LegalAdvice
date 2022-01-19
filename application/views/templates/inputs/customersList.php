<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="customer_id" class="form-label">Заказчик</label>
    <select class="form-select" name="customer_id" id="customer_id"
            required="">
        <?php foreach ($data['CUSTOMERS'] as $item) {
            echo $item['id'] == $data['DATA']['customer_id']
              ? '<option value="'.$item["id"].'" selected>'.$item["name"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["name"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите заказчика.
    </div>
</div>
