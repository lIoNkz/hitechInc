<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Review
 * @package App\Models
 * @version May 22, 2018, 11:34 am UTC
 *
 * @property string text
 * @property string name
 * @property string site
 */
class Review extends Model
{
    use SoftDeletes;

    public $table = 'reviews';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'text',
        'name',
        'site'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string',
        'name' => 'string',
        'site' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required',
        'name' => 'required'
    ];

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
}
