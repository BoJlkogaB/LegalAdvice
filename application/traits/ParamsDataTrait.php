<?php
namespace Traits;

trait ParamsDataTrait
{

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