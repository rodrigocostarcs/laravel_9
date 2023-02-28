<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    #php artisan make:model Comment -m
    use HasFactory;

    // caso a tabela esteja com outro nome, basta fazer -> protected $table = 'comentarios'; 


    protected $fillable = [
        'body',
        'visible'
    ];

    protected $casts = [
        'visible' => 'boolean'
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
