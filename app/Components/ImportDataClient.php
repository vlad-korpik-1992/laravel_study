<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportDataClient
{
    public $client;

    public function __construct()
    {
        $this->client = new Client([
            'base-uri' => 'https://jsonplaceholder.typicode.com/',
            'timeout' => '10.0',
            'veify' => false,
        ]);
    }
}

?>
