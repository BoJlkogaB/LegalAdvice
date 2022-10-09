<?php
namespace App\Classes\Containers;

use App\Classes\Containers\Exceptions\ContainerExceptionInterface;
use App\Classes\Containers\Exceptions\NotFoundExceptionInterface;

interface ContainerInterface
{

    /**
     * Находит запись контейнера по её идентификатору и возвращает её.
     *
     * @param  string  $id  Идентификатор записи, которую нужно найти.
     *
     * @return mixed Запись.
     *
     * @throws NotFoundExceptionInterface  Запись для этого идентификатора не найдена.
     * @throws ContainerExceptionInterface Ошибка при извлечении записи.
     */
    public function get(string $id);

    /**
     * Возвращает значение true, если контейнер может вернуть запись для
     * данного идентификатора. В противном случае возвращает значение false.
     *
     * has($id), возвращающий значение true, не означает, что get($id) не выдаст исключение.
     * Однако это означает, что get($id) не выдаст NotFoundExceptionInterface.
     *
     * @param  string  $id  Идентификатор записи, которую нужно найти.
     *
     * @return bool
     */
    public function has(string $id): bool;

}