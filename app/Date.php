<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function blogs()
    {
        return $this->belongsTo(Blog::class);
    }
}
