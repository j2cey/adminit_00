<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
    public function generateUuid()
    {
        return Str::orderedUuid();
    }
}
