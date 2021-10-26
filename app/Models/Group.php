<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';
    protected $fillable = ['name'];
    public function cities()
    {
        return $this->belongsToMany(City::class, 'group_cities', 'group_id', 'city_id');
    }
}
