<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Favorite extends Model
{
    protected $fillable = [
        'user_id',   // Ezt ADD hozzá!
        'animal_id', // Ez már valószínűleg benne van
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
