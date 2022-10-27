<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    public function saham()
    {
        return $this->hasMany(Saham::class);
    }

    use HasFactory;

    protected $table = 'brokers';
    protected $fillable = ['id', 'name', 'frequency', 'volume', 'value'];
}
