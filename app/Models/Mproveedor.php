<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mproveedor extends Model
{
    use HasFactory;
    protected $table='proveedor';
    protected $primaryKey = 'Idproveedor';
}
