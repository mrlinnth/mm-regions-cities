<?php

namespace Mrlinnth\Mmrc\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mmrc_regions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name_mm',
        'capital',
        'iso',
        'type',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get cities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany('Mrlinnth\Mmrc\Models\City');
    }

    /**
     * Get capital city
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function capital_city()
    {
        return $this->belongsTo('Mrlinnth\Mmrc\Models\City', 'capital');
    }
}
