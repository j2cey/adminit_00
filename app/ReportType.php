<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportType
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $name
 *
 * @property string|null $tags
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportType extends BaseModel
{
    protected $guarded = [];

    public function reports() {
        return $this->hasMany('App\Report');
    }
}
