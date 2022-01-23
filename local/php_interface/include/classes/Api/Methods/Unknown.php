<?php

namespace Zarzandmkh\Api\Methods;

use Zarzandmkh\Api\Api;

class Unknown extends Api
{
    public function init()
    {
        $this->responseCode = 404;
        $this->setResultError('unknown method', 404);
    }
}
