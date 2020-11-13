<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
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
