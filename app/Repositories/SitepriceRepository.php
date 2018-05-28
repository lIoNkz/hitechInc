<?php

namespace App\Repositories;

use App\Models\Siteprice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SitepriceRepository
 * @package App\Repositories
 * @version May 23, 2018, 9:27 am UTC
 *
 * @method Siteprice findWithoutFail($id, $columns = ['*'])
 * @method Siteprice find($id, $columns = ['*'])
 * @method Siteprice first($columns = ['*'])
*/
class SitepriceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'price',
        'old_price',
        'info',
        'image',
        'link'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Siteprice::class;
    }
}
