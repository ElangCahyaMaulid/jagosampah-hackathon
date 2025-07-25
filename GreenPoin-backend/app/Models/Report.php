<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plastic_type_id',
        'weight',
        'location',
        'photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plasticType()
    {
        return $this->belongsTo(PlasticType::class);
    }
}
