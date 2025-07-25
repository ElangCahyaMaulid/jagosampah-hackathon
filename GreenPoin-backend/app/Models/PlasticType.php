<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlasticType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
