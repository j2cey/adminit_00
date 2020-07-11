<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\BaseTrait;
use Spatie\Activitylog\Traits\LogsActivity;

class BaseModel extends Model
{
    use BaseTrait, LogsActivity;

    protected static $logAttributes = ['*'];

    public function scopeDefault($query, $exclude = []) {
        return $query
            ->where('is_default', true)->whereNotIn('id', $exclude);
    }

    public function state() {
        return $this->belongsTo('App\State');
    }
}
