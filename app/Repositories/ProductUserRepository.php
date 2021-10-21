<?php

namespace App\Repositories;

use App\Models\ProductUser;
use App\Repositories\BaseRepository;

/**
 * Class ProductUserRepository
 * @package App\Repositories
 * @version October 21, 2021, 4:19 pm UTC
*/

class ProductUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'product_id',
        'is_favorite',
        'is_liked'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductUser::class;
    }
}
