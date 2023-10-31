<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OryxSettins extends Model
{
    use HasFactory;

    protected $connection = 'mysql_oryx';

    protected $table = 'settings';

    public function scopeActive($query)
    {
        return $query->where('active', 1)->where('type', 3);
    }
}
