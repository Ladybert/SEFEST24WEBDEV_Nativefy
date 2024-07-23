<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_name',
        'service_photo',
        'service_desc',
        'tipe_id',
        'kategori_id',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tipe()
    {
        return $this->belongsTo(Tipe::class, 'tipe_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'name');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
