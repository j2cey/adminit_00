<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportDimension
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $tags
 * @property integer|null $state_id
 *
 * @property integer|null $report_trend_id
 * @property integer|null $report_field_id
 * @property integer|null $key_field_id
 * @property integer|null $key_value_id
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportDimension extends BaseModel
{
    protected $guarded = [];

    public function report_trend() {
        return $this->belongsTo('App\ReportTrend');
    }

    public function report_field() {
        return $this->belongsTo('App\ReportField');
    }

    public function key_field() {
        return $this->belongsTo('App\ReportField', 'key_field_id');
    }

    public function key_value() {
        return $this->belongsTo('App\ReportValue', 'key_value_id');
    }
}
