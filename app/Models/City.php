<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'zip'];

    public function barangays()
    {
        return $this->hasMany(Barangay::class, 'city_id');
    }
}
