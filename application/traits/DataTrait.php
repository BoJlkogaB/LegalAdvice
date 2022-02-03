<?php
namespace Traits;

trait DataTrait
{

    //    TODO: вынести в класс
    private array $data;

    public function getData(): array
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

}