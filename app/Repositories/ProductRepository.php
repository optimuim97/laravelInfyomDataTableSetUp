<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version October 21, 2021, 4:18 pm UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'sub_category_id',
        'brand_category_id',
        'subcategory_item_id',
        'name',
        'star_number',
        'price',
        'percentage',
        'barred_price',
        'slug',
        'publication_type_id',
        'sku',
        'excerpt',
        'description',
        'ext_title',
        'meta_keywords',
        'meta_description',
        'units_sold',
        'last_sale_at',
        'stock',
        'number_users_who_liked',
        'brand_id'
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
        return Product::class;
    }
}
