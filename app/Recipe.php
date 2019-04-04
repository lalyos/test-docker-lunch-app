<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name', 'description', 'email', 'calories', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
