<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OryxSettins extends Model
{
    use HasFactory;

    protected $connection = 'mysql_oryx';

    public function scopeActive($query)
    {
        return $query->where([['type',3],['active',1]]);
    }
}
