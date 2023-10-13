<?php

namespace LaravelLiberu\ActionLogger\DynamicRelations;

use Closure;
use LaravelLiberu\ActionLogger\Models\ActionLog;
use LaravelLiberu\DynamicMethods\Contracts\Method;

class ActionLogs implements Method
{
    public function name(): string
    {
        return 'actionLogs';
    }

    public function closure(): Closure
    {
        return fn () => $this->hasMany(ActionLog::class);
    }
}
