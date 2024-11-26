<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_type';
    protected $fillable = ['title', 'active'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
