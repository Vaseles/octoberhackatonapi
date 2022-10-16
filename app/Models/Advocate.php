<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advocate extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'profile_pic', 'short_bio', 'long_bio', 'advocate_years_exp', 'company_id', 'youtube', 'twitter', 'github'];

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
