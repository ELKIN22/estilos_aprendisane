<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Stancl\Tenancy\Database\Concerns\CentralConnection;

class Modulos extends Model
{
    use HasFactory, CentralConnection, LogsActivity;

    protected $table = 'modulos';
    protected $primaryKey = 'idModulos';
}
