<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * RODAR O COMANDO php artisan storage:link para criar um link simbólico na pasta public para trabalhar com imagens, essa pasta está dentro de storage/app/public
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsers(string|null $search = '')
    {
        $users = $this->where(function ($query) use ($search){ #o $this faz referência ao próprio model.
            if($search){
                $query->where('email',$search);
                $query->orWhere('name','LIKE',"%{$search}%");
            }
        })
        ->with('comments')
        ->paginate(15);

        return $users;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id','id');
    }
}
