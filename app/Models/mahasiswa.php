<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'fakultas',
        'jurusan_id',
        'telpon'
    ];

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class,'jurusan_id');
    }
}
