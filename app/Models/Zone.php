<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $table='zonemaster';
    protected $fillable = ['zone','name','details'];

    public function department()
    {
        return $this->hasMany(Department::class, 'dept_code');
    }
}
