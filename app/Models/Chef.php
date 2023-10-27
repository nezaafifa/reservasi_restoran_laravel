<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    protected $table='chef';
    protected $primaryKey='id';
    public $timestamps= false;
    protected $fillable=array('img_chef','name','profesi','description');
}
