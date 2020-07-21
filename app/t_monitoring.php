<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_monitoring extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // MASTER
    protected $table = "t_monitoring";
    protected $primaryKey = "monitoring_id";
    // ===========================
    protected $fillable = [
       'monitoring_celcius','monitoring_ph','monitoring_ppm','monitoring_created_at'
    ];
    public $timestamps = false;
}
