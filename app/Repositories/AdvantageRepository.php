<?php

namespace App\Repositories;

use App\Models\Advantage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AdvantageRepository
 * @package App\Repositories
 * @version May 22, 2018, 9:47 am UTC
 *
 * @method Advantage findWithoutFail($id, $columns = ['*'])
 * @method Advantage find($id, $columns = ['*'])
 * @method Advantage first($columns = ['*'])
*/
class AdvantageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Advantage::class;
    }

}
