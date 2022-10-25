<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construct extends Model
{
    use HasFactory;

    public function koumten()
    {
        return $this->belongsTo(Koumten::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
