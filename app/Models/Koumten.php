<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Koumten extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function construct()
    {
        return $this->hasOne(Construct::class);
    }
    protected $fillable = [
        'name',
        'address',
        'avairable_area',
        'contact_address_phone',
        'contact_address_mail',
    ];
}
