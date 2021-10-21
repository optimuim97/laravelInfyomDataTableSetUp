<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->word,
        'sub_category_id' => $this->faker->word,
        'brand_category_id' => $this->faker->word,
        'subcategory_item_id' => $this->faker->word,
        'name' => $this->faker->word,
        'star_number' => $this->faker->word,
        'price' => $this->faker->word,
        'percentage' => $this->faker->randomDigitNotNull,
        'barred_price' => $this->faker->word,
        'slug' => $this->faker->word,
        'publication_type_id' => $this->faker->word,
        'sku' => $this->faker->word,
        'excerpt' => $this->faker->text,
        'description' => $this->faker->text,
        'ext_title' => $this->faker->word,
        'meta_keywords' => $this->faker->text,
        'meta_description' => $this->faker->text,
        'units_sold' => $this->faker->text,
        'last_sale_at' => $this->faker->date('Y-m-d H:i:s'),
        'stock' => $this->faker->text,
        'number_users_who_liked' => $this->faker->text,
        'brand_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
