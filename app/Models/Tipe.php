<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function kategoris()
    {
        return $this->hasMany(Kategori::class);
    }
}
