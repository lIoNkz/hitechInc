<?php

namespace App\Repositories;

use App\Models\Breadcrumb;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BreadcrumbRepository
 * @package App\Repositories
 * @version June 4, 2018, 8:07 am UTC
 *
 * @method Breadcrumb findWithoutFail($id, $columns = ['*'])
 * @method Breadcrumb find($id, $columns = ['*'])
 * @method Breadcrumb first($columns = ['*'])
*/
class BreadcrumbRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'text',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Breadcrumb::class;
    }
}
