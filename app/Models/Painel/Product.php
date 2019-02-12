<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'name', 'number', 'active', 'category', 'description'
    ];
        // protected $guarded = ['admin'];
}
