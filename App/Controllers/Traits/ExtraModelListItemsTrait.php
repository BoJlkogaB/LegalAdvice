<?php
namespace Controllers\Traits;

trait ExtraModelListItemsTrait
{

    private array $modelList = [];

    public function setModelList($modelList)
    {
        $this->modelList = $modelList;
    }

    public function getModelList(): array
    {
        return $this->modelList;
    }

    public function generationModelList(): array
    {
        $data = [];
        foreach ($this->getModelList() as $key => $item) {
            $modelName = is_int($key) ? $item : $key;
            $methodName = 'get'.(is_int($key) ? 'name' : $item).'s';
            $model = '\Models\\'.$modelName;
            ${'model'.$modelName} = new $model($modelName);
            $data[strtoupper($modelName)] = ${'model'.$modelName}->$methodName($this->getDatabase());
        }

        return $data;
    }

}