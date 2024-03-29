<?php
namespace App\Classes\Traits;

trait ModelNameTrait
{

    private string $modelName;

    public function getModelName(): string
    {
        return $this->modelName;
    }

    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
    }

}