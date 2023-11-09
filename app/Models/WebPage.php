<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebPage extends Model
{
    use HasFactory;
    protected $table = 'webpage';
    protected $fillables = ['name', 'slug', 'html', 'status', 'created_at', 'updated_at'];
}
