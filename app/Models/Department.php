<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name','dept_code'];

    public function zone()
    {
        return $this->hasMany(Zone::class, 'dept_code');

    }
}
