<?php $data = $this->getData() ?>
<div class="col-12 <?= explode('/',
  $_SERVER['REQUEST_URI'])[2] == 'edit' ? 'd-none' : '' ?>">
    <label for="agreement_id" class="form-label">Договор</label>
    <select class="form-select" name="agreement_id" id="agreement_id"
            required="">
        <?php foreach ($data['AGREEMENTS'] as $item) {
            echo $item['id'] == $data['DATA']['agreement_id']
              ? '<option value="'.$item["id"].'" selected>'.$item["number"].'</option>'
              : '<option value="'.$item["id"].'">'.$item["number"].'</option>';
        } ?>
    </select>
    <div class="invalid-feedback">
        Пожалуйста, выберите договор.
    </div>
</div>
