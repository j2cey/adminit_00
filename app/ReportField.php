<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportField
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $name
 * @property integer $num_ord
 * @property integer $report_id
 * @property integer $report_value_type_id
 * @property integer $offset
 * @property integer $max_length
 *
 * @property string|null $tags
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportField extends BaseModel
{
    protected $guarded = [];

    public function report() {
        return $this->belongsTo('App\Report');
    }

    public function value_type() {
        return $this->belongsTo('App\ReportValueType');
    }

    public function values() {
        return $this->hasMany('App\ReportValue');
    }
}
