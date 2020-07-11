<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuidable;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class State
 * @package App
 *
 * @property integer $id
 * @property string $uuid
 * @property string $name
 * @property bool $is_default
 * @property string|null $tags
 *
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class State extends Model
{
    use Uuidable, LogsActivity;

    protected static $logAttributes = ['*'];
    protected $guarded = [];

    public function scopeDefault($query, $exclude = []) {
        return $query
            ->where('is_default', true)->whereNotIn('id', $exclude);
    }
}
