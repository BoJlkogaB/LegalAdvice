<?php
namespace Models\Traits;

trait PrepareDataTrait
{

    private array $requestData;

    public function setRequestData($requestData)
    {
        $this->requestData = $requestData;
    }

    public function getRequestData(): array
    {
        return $this->requestData;
    }

}