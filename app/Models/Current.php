<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Current extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','guest_list','check_in','check_out','room','items'];
}
