<?php
namespace App\Traits;


trait BaseTrait
{
    use Uuidable, StateTrait;

    public static function bootBaseTrait()
    {
        static::saving(function ($model) {
            $model->setDefaultState();
        });
    }
}
