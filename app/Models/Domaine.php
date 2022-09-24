<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Domaine extends Model
{
    use HasFactory;

    protected $fillable = ['region','ville','quartier','superficie','prix','proprio','description'];

    public function users()
     {
        return $this->belongsToMany(User::class,'domaine_user');
     }
}
