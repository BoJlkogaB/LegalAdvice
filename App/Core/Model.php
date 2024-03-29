<?php
namespace App\Core;

use App\Classes\Database\DatabaseInterface;
use App\Classes\Traits;

abstract class Model
{

    use Traits\ModelNameTrait;

    /**
     * @param  string  $modelName
     */
    public function __construct(string $modelName)
    {
        //    TODO: Убрать передачу имени модели и вшить в стандартный функционал
        $this->setModelName($modelName);
    }

    /**
     * @description Получаем все записи
     *
     * @param  \App\Classes\Database\DatabaseInterface  $database
     *
     * @return mixed
     */
    abstract public function getAll(DatabaseInterface $database): array;

    /**
     * @description Получаем одну запись по $id
     *
     * @param  int  $id
     * @param  \App\Classes\Database\DatabaseInterface  $database
     *
     * @return mixed
     */
    abstract public function getById(int $id, DatabaseInterface $database): array;

    /**
     * @description Создаём новую запись
     *
     * @param  array  $data
     * @param  \App\Classes\Database\DatabaseInterface  $database
     *
     * @return mixed
     */
    abstract public function create(array $data, DatabaseInterface $database): void;

    /**
     * @description Обновляем запись
     *
     * @param  array  $data
     * @param  \App\Classes\Database\DatabaseInterface  $database
     *
     * @return void
     */
    abstract public function update(array $data, DatabaseInterface $database): void;

    /**
     * @description Удаляем запись по $id
     *
     * @param  int  $id
     * @param  \App\Classes\Database\DatabaseInterface  $database
     *
     * @return void
     */
    abstract public function delete(int $id, DatabaseInterface $database): void;

}