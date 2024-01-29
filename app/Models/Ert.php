<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ert extends Model
{
    use HasFactory;
    protected $table='ert';
    protected $fillable = ['zone','name','specialization','phone','department'];

public function zone()
{
    return $this->hasMany(Zone::class, 'zone');
}

public function specialization()
{
    return $this->hasMany(Specialization::class, 'specialization');
}

public function employee()
{
    return $this->hasMany(Employee::class, 'employee');
}
}