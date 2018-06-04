<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Breadcrumb
 * @package App\Models
 * @version June 4, 2018, 8:07 am UTC
 *
 * @property string text
 * @property string url
 */
class Breadcrumb extends Model
{
    use SoftDeletes;

    public $table = 'breadcrumbs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'text',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required',
        'url' => 'required'
    ];

    
}
