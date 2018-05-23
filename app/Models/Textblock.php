<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Textblock
 * @package App\Models
 * @version May 22, 2018, 11:46 am UTC
 *
 * @property string text
 * @property string title
 * @property integer theme_id
 */
class Textblock extends Model
{
    use SoftDeletes;

    public $table = 'textblocks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'text',
        'title',
        'theme_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string',
        'title' => 'string',
        'theme_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required',
        'theme_id' => 'required'
    ];

    
}
