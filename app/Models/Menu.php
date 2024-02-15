<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Concerns\CentralConnection;

class Menu extends Model
{
    use HasFactory, CentralConnection;

    protected $primaryKey = 'id';
    protected $table = 'menus';
}
