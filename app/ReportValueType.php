<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportValueType
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $valuetype
 *
 * @property string|null $tags
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportValueType extends BaseModel
{
    protected $guarded = [];

    public function fields() {
        return $this->hasMany('App\ReportField');
    }
}
