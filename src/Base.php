<?php


namespace Hkonnet\QuiptApi;


class Base extends \GuzzleHttp\Client
{
    public function greet($greet = "Hello World")
    {
        return $greet;
    }
}
