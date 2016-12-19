<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Base
{

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'provinces';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates  = ['deleted_at'];

    protected $presenter = \App\Presenters\ProvincePresenter::class;

    // Relations
    public function districts()
    {
        return $this->hasMany(\App\Models\District::class, 'province_id', 'id');
    }
    
    // Utility Functions

    /*
     * API Presentation
     */
    public function toAPIArray()
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'type' => $this->type,
        ];
    }

}