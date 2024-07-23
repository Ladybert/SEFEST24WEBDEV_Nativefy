<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tipe_id'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function tipe()
    {
        return $this->belongsTo(Tipe::class, 'tipe_id');
    }
}
