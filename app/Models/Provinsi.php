<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsis';

    protected $fillable = [
        'name',
        'alt_name',
        'latitude',
        'longitude'
    ];

    public function kabupatenKotas()
    {
        return $this->hasMany(KabupatenKota::class);
    }
}
