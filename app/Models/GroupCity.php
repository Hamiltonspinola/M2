<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupCity extends Model
{
    use HasFactory;
    
    protected $fillable = ['group_id', 'city_id'];

    public function campaigns()
    {
        $this->hasMany(Campaign::class);
    }
}
