<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frameworks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'year',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
