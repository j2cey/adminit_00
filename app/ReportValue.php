<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportValue
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $generation_uuid
 * @property integer $line_num
 * @property integer $report_field_id
 *
 * @property integer $string_value
 * @property integer $biginteger_value
 * @property integer $integer_value
 * @property string $binary_value
 * @property bool $boolean_value
 * @property \Illuminate\Support\Carbon $datetime_value
 * @property string $ipaddress_value
 * @property string $json_value
 *
 * @property string|null $tags
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportValue extends BaseModel
{
    protected $guarded = [];

    /**
     * If this value is the value of a report field
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function field() {
        return $this->belongsTo('App\ReportField');
    }

    /**
     * If this value is the value of a Dimension configuration
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function report_dimension() {
        return $this->hasOne('App\ReportDimension', 'key_value_id');
    }

    /**
     * If this value is the result of application of a Dimension configuration on a specific value
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function report_dimension_value() {
        return $this->hasOne('App\ReportDimensionValue');
    }
}
