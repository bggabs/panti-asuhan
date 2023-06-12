<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table="galleries"; // Eloquent akan membuat model mahasiswa
//menyimpan record di tabel mahasiswas
    public $timestamps= true;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    protected $fillable = [
        'id',
        'photo',
        'name',
        'description',
        'date',
        'created_at',
        'updated_at',
    ];

}
