<?php

namespace App\Traits;

use App\State;

trait StateTrait
{
    public function setDefaultState() {
        if (empty($this->state_id)) {
            $default_state = State::default();
            if ($default_state) {
                $this->state_id = $default_state->first()->id;
            }
        }
    }
}
