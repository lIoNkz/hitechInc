<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Work
 * @package App\Models
 * @version June 12, 2018, 5:09 am UTC
 *
 * @property string title
 * @property string url
 */
class Work extends Model
{
    use SoftDeletes;

    public $table = 'works';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'url' => 'required'
    ];

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
}
