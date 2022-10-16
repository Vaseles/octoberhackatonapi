<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo', 'summary'];

    public function advocates() {
        return $this->hasMany(Advocate::class);
    }
}
