<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurUser extends Model
{
    use HasFactory;

    protected $table="users";
    protected $fillable = ['user_name','user_address','user_email','user_contact','user_password'];
}