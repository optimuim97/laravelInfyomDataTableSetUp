<?php

namespace App\Repositories;

use App\Models\ProductSpecification;
use App\Repositories\BaseRepository;

/**
 * Class ProductSpecificationRepository
 * @package App\Repositories
 * @version October 21, 2021, 4:19 pm UTC
*/

class ProductSpecificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'name',
        'description',
        'logo',
        'slug'
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
        return ProductSpecification::class;
    }
}
