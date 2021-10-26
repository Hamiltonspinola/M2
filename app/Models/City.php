<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = ['name'];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_cities', 'city_id', 'group_id');
    }
}
