<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'department', 'profile_picture'];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
