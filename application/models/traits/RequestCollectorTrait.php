<?php
namespace Models\Traits;

trait RequestCollectorTrait
{

    // TODO: Сделать из данного трейта класс на основе интерфейса и перенести в пространство имён \Database
    //  и реализовать полиморфизм
    private function getSelectQuery($data, $search = false): string
    {
        if (count($data) == 1) {
            $query = $this->getSimpleSelectQuery($data, $search);
        } else {
            $query = $this->getComplexSelectQuery($data, $search);
        }

        return $query;
    }

    private function getSimpleSelectQuery($data, $search = false): string
    {
        $query = "SELECT ";
        foreach ($data[$this->getModelName()] as $key) {
            $query .= "`$key`, ";
        }

        return substr($query, 0,
            -2)." FROM ".$this->getModelName().($search ? ' WHERE `id` = :id' : '');
    }

    private function getComplexSelectQuery($data, $search = false): string
    {
        $firstQueryPart = "SELECT ";
        $secondQueryPart = "";
        $keys = array_keys($data);
        $ids = [];
        for ($i = 1; $i < count($data); $i++) {
            $ids[] = array_pop($data[$keys[$i]]);
            $secondQueryPart .= " LEFT JOIN `$keys[$i]` ON `$keys[$i]`.`id` = `".$this->getModelName()."`.`".$ids[$i - 1]."`";
        }
        foreach ($data as $key => $items) {
            foreach ($items as $item) {
                $firstQueryPart .= "`$key`.`$item`, ";
            }
        }
        $firstQueryPart = substr($firstQueryPart, 0,
            -2)." FROM `".$this->getModelName().'`';

        return $firstQueryPart.$secondQueryPart.($search ? ' WHERE `id` = :id' : '');
    }

    public function getCreateQuery($data): string
    {
        $query = "INSERT INTO `".$this->getModelName()."` (";
        foreach ($data as $key => $item) {
            $query .= "`$key`, ";
        }
        $query .= "`created_at`, `updated_at`) VALUES (";
        foreach ($data as $key => $item) {
            $query .= ":$key, ";
        }

        return $query.":created_at, :updated_at)";
    }

    public function getUpdateQuery($data): string
    {
        $query = "UPDATE `".$this->getModelName()."` SET ";
        foreach ($data as $key => $item) {
            $query .= "`$key` = :$key, ";
        }

        return $query."`updated_at` = :updated_at WHERE `id` = :id";
    }

    public function getDeleteQuery(): string
    {
        return "DELETE FROM ".$this->getModelName()." WHERE `id` = :id";
    }

    public function getParams($data): array
    {
        foreach ($data as $key => $item) {
            $params[$key] = $item;
        }
        $params['created_at'] = date("Y-m-d H:i:s");
        $params['updated_at'] = date("Y-m-d H:i:s");

        return $params;
    }

}