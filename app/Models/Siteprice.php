<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Siteprice
 * @package App\Models
 * @version May 23, 2018, 9:27 am UTC
 *
 * @property string title
 * @property string price
 * @property string old_price
 * @property string info
 * @property string image
 */
class Siteprice extends Model
{
    use SoftDeletes;

    public $table = 'siteprices';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'price',
        'old_price',
        'info',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'price' => 'string',
        'old_price' => 'string',
        'info' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'price' => 'required',
        'image' => 'required'
    ];

    
}
