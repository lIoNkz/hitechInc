<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Advantage
 * @package App\Models
 * @version May 22, 2018, 9:47 am UTC
 *
 * @property string text
 */
class Advantage extends Model
{
    use SoftDeletes;

    public $table = 'advantages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required'
    ];

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
}
