<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Concerns\CentralConnection;

class Municipio extends Model
{
    use HasFactory, CentralConnection;

    protected $primaryKey = 'cciu';
    protected $table = 'municipios';
}
