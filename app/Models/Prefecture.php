<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function stations()
    {
        return $this->hasMany(Station::class);
    }

    public function stamps()
    {
        return $this->hasMany(Stamp::class);
    }
}
