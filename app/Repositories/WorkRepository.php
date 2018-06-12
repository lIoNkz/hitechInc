<?php

namespace App\Repositories;

use App\Models\Work;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class WorkRepository
 * @package App\Repositories
 * @version June 12, 2018, 5:09 am UTC
 *
 * @method Work findWithoutFail($id, $columns = ['*'])
 * @method Work find($id, $columns = ['*'])
 * @method Work first($columns = ['*'])
*/
class WorkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Work::class;
    }
}
