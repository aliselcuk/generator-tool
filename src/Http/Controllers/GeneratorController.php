<?php

namespace SuperV\Tools\Generator\Http\Controllers;

use SuperV\Platform\Domains\Database\Schema\Schema;
use SuperV\Platform\Http\Controllers\BaseApiController;

class GeneratorController extends BaseApiController
{
    public function index()
    {
        return ['data' => [1,2,3]];

    }
}