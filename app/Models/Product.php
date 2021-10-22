<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="Product",
 *      required={"name", "star_number"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="category_id",
 *          description="category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="sub_category_id",
 *          description="sub_category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="brand_category_id",
 *          description="brand_category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="subcategory_item_id",
 *          description="subcategory_item_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="star_number",
 *          description="star_number",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="price",
 *          description="price",
 *          type="number",
 *          format="number"
 *      ),
 *      @SWG\Property(
 *          property="percentage",
 *          description="percentage",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="barred_price",
 *          description="barred_price",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="slug",
 *          description="slug",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="publication_type_id",
 *          description="publication_type_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sku",
 *          description="sku",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="excerpt",
 *          description="excerpt",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ext_title",
 *          description="ext_title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_keywords",
 *          description="meta_keywords",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="meta_description",
 *          description="meta_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="units_sold",
 *          description="units_sold",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="last_sale_at",
 *          description="last_sale_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="stock",
 *          description="stock",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="number_users_who_liked",
 *          description="number_users_who_liked",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="brand_id",
 *          description="brand_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'sub_category_id' => 'integer',
        'brand_category_id' => 'integer',
        'subcategory_item_id' => 'integer',
        'name' => 'string',
        'star_number' => 'string',
        'price' => 'decimal:4',
        'percentage' => 'integer',
        'barred_price' => 'string',
        'slug' => 'string',
        'publication_type_id' => 'string',
        'sku' => 'string',
        'excerpt' => 'string',
        'description' => 'string',
        'ext_title' => 'string',
        'meta_keywords' => 'string',
        'meta_description' => 'string',
        'units_sold' => 'string',
        'last_sale_at' => 'datetime',
        'stock' => 'string',
        'number_users_who_liked' => 'string',
        'brand_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'nullable',
        'sub_category_id' => 'nullable',
        'brand_category_id' => 'nullable',
        'subcategory_item_id' => 'nullable',
        'name' => 'required|string|max:255',
        'star_number' => 'required|string|max:255',
        'price' => 'nullable|numeric',
        'percentage' => 'nullable|integer',
        'barred_price' => 'nullable|string|max:255',
        'slug' => 'nullable|string|max:255',
        'publication_type_id' => 'nullable|string|max:1',
        'sku' => 'nullable|string|max:255',
        'excerpt' => 'nullable|string',
        'description' => 'nullable|string',
        'ext_title' => 'nullable|string|max:511',
        'meta_keywords' => 'nullable|string',
        'meta_description' => 'nullable|string',
        'units_sold' => 'nullable|string',
        'last_sale_at' => 'nullable',
        'stock' => 'nullable|string',
        'number_users_who_liked' => 'nullable|string',
        'brand_id' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


    /**
     * Get the category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all of the advantages for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function advantages()
    {
        return $this->hasMany(Advantage::class);
    }

    /**
     * Get all of the product_specification for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_specifications()
    {
        return $this->hasMany(ProductSpecification::class);
    }


}
