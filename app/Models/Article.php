<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Models
 * @version June 11, 2018, 11:03 am UTC
 *
 * @property string title
 * @property string author
 * @property string text
 */
class Article extends Model
{
    use SoftDeletes;

    public $table = 'articles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'author',
        'text',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'author' => 'string',
        'text' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'author' => 'required',
        'text' => 'required',
        'slug' => 'required|unique'
    ];

     public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }
}
