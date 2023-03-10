<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class,'jurusan_id');
    }
}
