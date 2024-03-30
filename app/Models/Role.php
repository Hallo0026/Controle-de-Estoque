<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['role', 'create_permission', 'read_permission', 'update_permission', 'delete_permission', 'restricted_pages_access'];
}
