<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Concerns\CentralConnection;

class Departamento extends Model
{
    use HasFactory, CentralConnection;
    
    protected $primaryKey = 'cdep';
    protected $table = 'departamentos';
}
