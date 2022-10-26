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
    protected $fillable = [
        'sinchiku',
        'reform',
        'repair_amamori',
        'repair_gaiheki',
        'repair_naisou',
        'repair_mizumore',
        'repair_aircon',
    ];

}
