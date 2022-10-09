<?php
namespace App\Classes\Containers;

use App\Classes\Containers\Exceptions\NotFoundException;
use ReflectionClass;
use ReflectionException;

class Container implements ContainerInterface
{

    /**
     * @throws \ReflectionException
     */
    public function get(string $id): object
    {
        return $this->createObject($id);
    }

    /**
     * @throws NotFoundException
     */
    public function has(string $id): bool
    {
        if (!(isset($this->objects[$id]) || class_exists($id))) {
            throw new NotFoundException('Не найден класс по переданному ключу');
        }

        return true;
    }

    /**
     * Создаём объект класса с использованием DI
     *
     * @param  string  $class
     *
     * @return object
     *
     * @throws ReflectionException
     */
    private function createObject(string $class): object
    {
        $classReflector = new ReflectionClass($class);

        $constructReflector = $classReflector->getConstructor();
        if (empty($constructReflector)) {
            return new $class;
        }

        $constructArguments = $constructReflector->getParameters();
        if (empty($constructArguments)) {
            return new $class;
        }

        $args = [];
        foreach ($constructArguments as $argument) {
            $argumentType = $argument->getType()->getName();
            $args[$argument->getName()] = $this->get($argumentType);
        }

        return new $class(...$args);
    }

}