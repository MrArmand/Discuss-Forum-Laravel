<?php

namespace App\Http;

class Container
{

    private $apiKey;

    public function __construct($apiKey){
        $this->apiKey = $apiKey;

    }


}