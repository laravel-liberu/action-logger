<?php

namespace LaravelLiberu\ActionLogger\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\Permissions\Models\Permission;
use LaravelLiberu\Users\Models\User;

class ActionLog extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'route', 'name');
    }
}
