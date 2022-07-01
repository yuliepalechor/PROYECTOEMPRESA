<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa_model extends Model
{
    use HasFactory;
    

    protected $table='empresa'; 
    protected $fillable=[
        'nombre',
        'direccion',
        'telefono',
        'corrreo'
    ];   
}
