<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'primary_color',
        'secondary_color',
        'logo',
        'strapline',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}


