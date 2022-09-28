<?php
namespace Traits;

trait DataTrait
{

    //    TODO: вынести в класс
    private array $data;

    public function getAll(): array
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

}