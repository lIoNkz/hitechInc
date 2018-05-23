<?php

namespace App\Repositories;

use App\Models\Textblock;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TextblockRepository
 * @package App\Repositories
 * @version May 22, 2018, 11:46 am UTC
 *
 * @method Textblock findWithoutFail($id, $columns = ['*'])
 * @method Textblock find($id, $columns = ['*'])
 * @method Textblock first($columns = ['*'])
*/
class TextblockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'text',
        'title',
        'theme_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Textblock::class;
    }
}
