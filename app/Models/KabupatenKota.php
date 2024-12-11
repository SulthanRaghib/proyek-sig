<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabupatenKota extends Model
{
    use HasFactory;

    protected $table = 'kabupaten_kotas';

    protected $fillable = [
        'provinsi_id',
        'name',
        'alt_name',
        'latitude',
        'longitude'
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
}
