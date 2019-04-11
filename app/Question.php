<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{

    protected $fillable = ['title', 'body'];

    /**
     * Relation declaration.
     *
     * @return BelongsTo
     */
    public function users(){
        return $this->belongsTo(User::class);
    }
}
