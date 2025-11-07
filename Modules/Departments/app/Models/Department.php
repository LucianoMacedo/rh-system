<?php

namespace Modules\Departments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Employees\Models\Employee;

// use Modules\Departments\Database\Factories\DepartmentFactory;

class Department extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'manager_id'
    ];
    /**
     * Get the employee that manages the department.
     */
    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }
}
