<?php

namespace App\Traits;


trait Uuidable
{
    use UuidTrait;

    public static function bootUuidable()
    {
        static::saving(function ($model) {
            $model->uuid = $model->generateUuid();
        });
    }
}

