<?php
namespace Controllers\Traits;

use Core\Model;
use ReflectionClass;

trait ModelTrait
{

    private Model $model;

    private string $modelName;

    public function getModel(): Model
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $model = 'Models\\'.$model;
        $this->model = new $model();
    }

    public function getModelName(): string
    {
        return $this->modelName;
    }

    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
    }

    public function useModel()
    {
        $reflection = new ReflectionClass($this);
        $modelName = array_slice(explode('\\',
          substr($reflection->getName(), 0, -10)), -1)[0];
        $this->setModelName($modelName);
        $this->setModel($this->getModelName());
    }

}