<?php
namespace App\Classes\Traits;

trait ParamsDataTrait
{

    //    TODO: вынести в класс
    private array $paramsData;

    public function setParamsData($paramsData)
    {
        $this->paramsData = $paramsData;
    }

    public function getParamsData(): array
    {
        return $this->paramsData;
    }

    public function setParamsDataFromPost($paramsData)
    {
        $data = [];
        foreach ($paramsData as $key) {
            $data[$key] = $_POST[$key] ?? '';
        }
        $this->paramsData = $data;
    }

}