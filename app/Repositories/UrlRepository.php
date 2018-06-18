<?php

namespace App\Repositories;

use App\Models\Url;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UrlRepository
 * @package App\Repositories
 * @version June 18, 2018, 6:14 am UTC
 *
 * @method Url findWithoutFail($id, $columns = ['*'])
 * @method Url find($id, $columns = ['*'])
 * @method Url first($columns = ['*'])
*/
class UrlRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'method'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Url::class;
    }
}
