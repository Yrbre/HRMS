<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    public function trainee()
    {
        return $this->hasOne(Trainee::class, 'employee_id', 'id');
    }

    protected $fillable = [
        'namalengkap',
        'deptdesc',
        'tglmasuk',
        'jabdesc',
        'tempatlahir',
        'tgl_lahir',
        'cv',

    ];
}
