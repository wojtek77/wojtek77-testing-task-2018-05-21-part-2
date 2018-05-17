<?php

namespace AppBundle\Service;

class RestClient extends \GuzzleHttp\Client
{
    public function __construct($baseUri)
    {
        $config = ['base_uri' => $baseUri];
        parent::__construct($config);
    }
}
