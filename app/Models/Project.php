<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        // Mass Assignment
        'name',
        'slug',
        'description',
        'creation_date',
        'expiring_date',
        'label_tag',
        'price',
        'completed'
    ];

    public function types(): HasMany
    {
        return $this->hasOne(Type::class); // One to One
    }
}
