<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Metatag
 * @package App\Models
 * @version May 28, 2018, 9:20 am UTC
 *
 * @property string title
 * @property string meta
 * @property string url
 * @property string webpage
 */
class Metatag extends Model
{
    use SoftDeletes;

    public $table = 'metatags';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'meta',
        'url',
        'webpage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'meta' => 'string',
        'url' => 'string',
        'webpage' => 'string'
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

    
}
