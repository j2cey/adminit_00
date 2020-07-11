<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportTrend
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $tags
 * @property integer $state_id
 * @property string $code
 * @property string $name
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportTrend extends BaseModel
{
    protected $guarded = [];
}
