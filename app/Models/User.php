<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'username', 'password', 'nim', 'jurusan', 'email', 'role', 'image'];

    public function Matkul() {
        return $this->hasMany(Matkul::class);
    }

}
