<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Library
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserModel extends Model
{
    protected $table = 'users';
    protected $guarded = ['idUsers'];

}
