<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Base
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'districts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'location',
        'province_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates  = ['deleted_at'];

    protected $presenter = \App\Presenters\DistrictPresenter::class;

    // Relations
    public function Province()
    {
        return $this->belongsTo(\App\Models\Province::class, 'province_id', 'id');
    }


    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'type'        => $this->type,
            'location'    => $this->location,
            'province_id' => $this->province_id,
        ];
    }

}