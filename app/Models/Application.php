<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }


    protected $fillable = ['user', 'topic', 'message', 'status', 'comment'];
}
