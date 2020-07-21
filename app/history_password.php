<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history_password extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // MASTER
    protected $table = "history_password";
    protected $primaryKey = "history_pw_id";
    // ===========================
    protected $fillable = [
        "user_id"
    ];
    public $timestamps = false;
}
