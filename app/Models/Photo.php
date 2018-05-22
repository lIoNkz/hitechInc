<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Relation;
/**
 * Class Photo
 * @package App\Models
 * @version May 22, 2018, 9:42 am UTC
 *
 * @property string path
 * @property string size
 * @property integer photoable_id
 * @property string photoable_type
 */



class Photo extends Model
{
    use SoftDeletes;

    public $table = 'photos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'path',
        'size',
        'photoable_id',
        'photoable_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'path' => 'string',
        'size' => 'string',
        'photoable_id' => 'integer',
        'photoable_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'path' => 'required',
        'size' => 'required',
        'photoable_id' => 'required',
        'photoable_type' => 'required'
    ];

    public function photoable()
    {
        return $this->morphTo();
    }
    
}
