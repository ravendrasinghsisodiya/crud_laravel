<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_name', 'project_description', 'employee_id'];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
