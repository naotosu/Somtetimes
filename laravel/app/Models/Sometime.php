<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sometime extends Model
{
    use HasFactory;

    protected $table = 'sometimes';

    public function scopeSearchBySometime($query, $my_id)
    {
        if (isset($my_id)) {
            $query->where('user_id', $my_id);
        }

        return $query;
    }
}
