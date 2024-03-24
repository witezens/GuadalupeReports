<?php

namespace Modules\GuadalupeReports\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VProduct extends Model
{

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected $table = 'view_inventory_products';
}
