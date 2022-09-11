<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $fillable = ['name', 'email','phone','guest_list','check_in','check_out'];
}
