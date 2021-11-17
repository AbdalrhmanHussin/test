<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;

    /**
     * Usage: get the company that each task belong to
     */
    public function company()
    {
        return $this->belongsTo(company_group::class);
    }

    public function users()
    {
        return $this->belongsToMany(users::class,'users_tasks');
    }
}
