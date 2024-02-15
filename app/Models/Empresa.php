<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Stancl\Tenancy\Database\Concerns\CentralConnection;

class Empresa extends Model
{
    use HasFactory, LogsActivity, CentralConnection;

    protected $table = 'empresas';
    protected $primaryKey = 'cempre';
}
