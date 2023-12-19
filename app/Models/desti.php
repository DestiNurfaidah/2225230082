<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desti extends Model
{
    use HasFactory;
    protected $table= "desti";
    protected $fillable= ['Nama','Email','Nomortelepon','Seat', 'Jumlahtiket'];
}
