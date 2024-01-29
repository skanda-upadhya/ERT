<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','aadhar','department','desgination'];

    public function ert()
    {
        return $this->hasMany(Ert::class, 'emp_name');

    }
}
