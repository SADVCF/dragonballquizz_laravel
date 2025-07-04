<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = ['nickname'];

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}

