<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';

    protected $fillable = [
        'nik',
        'nama',
        'jenisKelamin',
        'alamat',
        'email',
        'password',
        'jabatan',
        'levelUser',
        'username',
    ];

    public $timestamps = false;
}