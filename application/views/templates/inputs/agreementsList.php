<?php $data = $this->getData() ?>
<div class="col-12">
    <label for="agreement" class="form-label">Договор</label>
    <select class="form-select" name="agreement" id="agreement"
            required="" <?= explode('/',
      $_SERVER['REQUEST_URI'])[2] == 'edit' ? 'disabled' : '' ?>>
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
