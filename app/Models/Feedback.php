<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Feedback extends Model
{
    use HasFactory;
    protected $table="feedback";
    public $timestamps= true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'message',
    ];
}
