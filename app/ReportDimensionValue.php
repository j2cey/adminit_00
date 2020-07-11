<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportDimensionValue
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $tags
 * @property integer $state_id
 *
 * @property integer|null $report_dimension_id
 * @property integer|null $report_value_id
 * @property integer|null $report_trend_id
 * @property integer|null $trend_value_id
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportDimensionValue extends BaseModel
{
    protected $guarded = [];

    public function report_dimension() {
        return $this->belongsTo('App\ReportDimension');
    }

    public function report_value() {
        return $this->belongsTo('App\ReportValue');
    }

    public function report_trend() {
        return $this->belongsTo('App\ReportTrend', 'report_trend_id');
    }

    public function trend_value() {
        return $this->belongsTo('App\ReportValue', 'trend_value_id');
    }
}
