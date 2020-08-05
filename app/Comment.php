<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'status', 'post_id', 'user_id'];
    protected $guarded = ['id'];

    public function ticket() {
        return $this->belongsTo('App\Ticket');
    }
}
