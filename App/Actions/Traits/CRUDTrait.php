<?php
namespace App\Actions\Traits;

use App\Classes\Database\DatabaseInterface;
use App\Classes\Traits as GlobalTraits;

trait CRUDTrait
{

    use RequestCollectorTrait;
    use GlobalTraits\ParamsDataTrait;

    public function getAll(DatabaseInterface $database): array
    {
        return $database->fetchAll($this->getSelectQuery($this->getParamsData()));
    }

    public function getById($id, DatabaseInterface $database): array
    {
        return $database->fetch(
          $this->getSelectQuery($this->getParamsData(), true),
          ['id' => $id],
        );
    }

    public function create($data, DatabaseInterface $database): void
    {
        $database->query($this->getCreateQuery($data), $this->getParams($data));
    }

    public function update($data, DatabaseInterface $database): void
    {
        $database->query($this->getUpdateQuery($data), $this->getParams($data));
    }

    public function delete($id, DatabaseInterface $database): void
    {
        $database->query($this->getDeleteQuery(), ['id' => $id]);
    }

}