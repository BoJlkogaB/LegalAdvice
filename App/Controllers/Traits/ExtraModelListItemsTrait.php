<?php
namespace App\Controllers\Traits;

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
        foreach ($this->getModelList() as $item) {
            $modelName = $item;
            $model = 'App\\Actions\\'.$modelName;
            ${'model'.$modelName} = new $model($modelName);
            $data[strtoupper($modelName)] = ${'model'.$modelName}->getNames($this->getDatabase());
        }

        return $data;
    }

}