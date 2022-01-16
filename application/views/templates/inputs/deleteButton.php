<?php $data = $this->getData() ?>
<a class="btn btn-danger btn-lg btn-block text-white"
   href="/<?= $this->getModelName() ?>/delete/?id=<?= $data['DATA']['id'] ?>">Удалить</a>
