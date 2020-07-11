<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportDimensionAlert
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $tags
 * @property integer|null $state_id
 *
 * @property integer|null $report_dimension_id
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class ReportDimensionAlert extends Model
{
    public function report_dimension() {
        return $this->belongsTo('App\ReportDimension');
    }
}
