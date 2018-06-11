<?php

namespace App\Repositories;

use App\Models\Article;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticleRepository
 * @package App\Repositories
 * @version June 11, 2018, 11:03 am UTC
 *
 * @method Article findWithoutFail($id, $columns = ['*'])
 * @method Article find($id, $columns = ['*'])
 * @method Article first($columns = ['*'])
*/
class ArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'author',
        'text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }
}
