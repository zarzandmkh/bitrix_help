<?php

namespace Zarzandmkh\Api;

interface ApiFactoryInterface
{
    public static function create(): Api;
}
