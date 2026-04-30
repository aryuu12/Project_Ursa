<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'username',
        'email',
        'password',
        'level',
        'tanggal_lahir',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'tanggal_lahir' => 'date',
    ];

    /**
     * Auto generate ID
     */
    protected static function booted()
    {
        static::creating(function ($user) {
            if (empty($user->id)) {
                do {
                    $id = Str::upper(Str::random(20));
                } while (self::where('id', $id)->exists());

                $user->id = $id;
            }
        });
    }

    /**
     * Custom hash (aturan kamu)
     */
    public static function customHash($password)
    {
        $result = '';

        foreach (str_split($password) as $char) {
            if (ctype_upper($char)) {
                $result .= chr(ord($char) + 7);
            } elseif (ctype_lower($char)) {
                $result .= chr(ord($char) + 5);
            } elseif (ctype_digit($char)) {
                $result .= (string)((int)$char + 3);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
    
}
