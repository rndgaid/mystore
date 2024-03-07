<?php

namespace core\base\controllers;

class RouteController
{
    private static ?RouteController $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): RouteController
    {
        return self::$instance ?? new self();
    }

    private function __clone()
    {
    }
}
