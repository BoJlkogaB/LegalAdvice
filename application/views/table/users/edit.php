<?php $data = $this->getData() ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Пользователь № <?= $data['DATA']['id'] ?>
                - <?= $data['DATA']['email'] ?></h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/<?= $this->getModelName() ?>/update/">
                <div class="row g-3">
                    <?php
                    $this->render('invisibleID');
                    $this->render('email');
                    $this->render('rolesList');
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