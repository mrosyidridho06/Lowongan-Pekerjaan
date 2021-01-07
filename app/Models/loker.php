<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loker extends Model
{
    use HasFactory;
    public $table = 'tambah_loker'; 
    protected $fillable = [
        'nama_perusahaan',
        'bidang',
        'bagian',
        'no_perusahaan',
        'berlaku',
        'kadaluarsa',
        'lokasi',
        'email',
        'no_telp',
    ];
}