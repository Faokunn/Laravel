<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Chest;

class Program extends Model
{
    protected $fillable = [
        'title'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function chest(){
        return $this->hasMany(Chest::class);
    }
}
