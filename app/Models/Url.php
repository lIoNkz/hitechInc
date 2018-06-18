<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Url
 * @package App\Models
 * @version June 18, 2018, 6:14 am UTC
 *
 * @property string title
 * @property string slug
 * @property string method
 */
class Url extends Model
{
    use SoftDeletes;

    public $table = 'urls';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'method'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'method' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'method' => 'required'
    ];

    
}
