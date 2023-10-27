<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table='reservation';
    protected $primaryKey='id';
    public $timestamps= false;
    protected $fillable=array('name','email','phone','date','time','people','message');
}
