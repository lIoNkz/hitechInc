<?php

namespace App\Repositories;

use App\Models\Metatag;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MetatagRepository
 * @package App\Repositories
 * @version May 28, 2018, 9:20 am UTC
 *
 * @method Metatag findWithoutFail($id, $columns = ['*'])
 * @method Metatag find($id, $columns = ['*'])
 * @method Metatag first($columns = ['*'])
*/
class MetatagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'meta',
        'url',
        'webpage'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Metatag::class;
    }
}
