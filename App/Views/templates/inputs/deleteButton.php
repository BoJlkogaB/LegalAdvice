<?php $data = $this->getAll() ?>
<a class="btn btn-danger btn-lg btn-block text-white"
   href="/<?= $this->getModelName() ?>/delete/?id=<?= $data['DATA']['id'] ?>">Удалить</a>
