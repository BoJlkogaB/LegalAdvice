<?php $data = $this->getAll() ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Услуга № <?= $data['DATA']['service_id'] ?> в
                договоре <?= $data['AGREEMENTS'][$data['DATA']['agreement_id'] - 1]['number'] ?></h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/<?= $this->getModelName() ?>/update/">
                <div class="row g-3">
                    <?php
                    $this->render('invisibleID');
                    $this->render('servicesList');
                    $this->render('agreementsList');
                    ?>
                </div>
                <hr class="my-4">
                <?php
                $this->render('updateButton');
                $this->render('deleteButton');
                ?>
            </form>
        </div>
    </div>
</main>