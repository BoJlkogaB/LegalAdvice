<?php $data = $this->getAll() ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="row g-3 mt-3">
        <div class="col-12">
            <h4 class="mb-3">Новый пользователь</h4>
            <form class="needs-validation" novalidate="" method="post"
                  action="/<?= $this->getModelName() ?>/create/">
                <div class="row g-3">
                    <?php
                    $this->render('email');
                    $this->render('password');
                    $this->render('rolesList');
                    ?>
                </div>
                <hr class="my-4">
                <?php $this->render('createButton') ?>
            </form>
        </div>
    </div>
</main>