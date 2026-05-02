<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event'; // penting (karena bukan events)

    protected $primaryKey = 'id_event';

    protected $fillable = [
        'nama_event',
        'tanggal',
        'foto',
        'deskripsi',
        'jam',
        'status',
    ];
}