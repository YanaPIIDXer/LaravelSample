<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // ↓追加。
    protected $fillable = ["user_id", "password"];
}
