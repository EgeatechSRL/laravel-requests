<?php

namespace EgeaTech\LaravelRequests\Interfaces\Http\Requests\RequestData;

interface ModelUpdateDataInterface
{
    /**
     * This method will return all request fields properly
     * mapped to their DB columns counterpart
     * @return array
     */
    public function getData(): array;
}
