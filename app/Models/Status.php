<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // 可更新字段
    protected $fillable = ['content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
