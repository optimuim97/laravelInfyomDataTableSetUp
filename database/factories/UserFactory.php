<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->word,
        'account_type_id' => $this->faker->word,
        'last_name' => $this->faker->word,
        'name' => $this->faker->word,
        'dial_code' => $this->faker->word,
        'phone_number' => $this->faker->word,
        'phone' => $this->faker->word,
        'email' => $this->faker->word,
        'password' => $this->faker->word,
        'gender' => $this->faker->word,
        'city' => $this->faker->word,
        'town' => $this->faker->word,
        'address' => $this->faker->word,
        'birthday' => $this->faker->word,
        'country_id' => $this->faker->word,
        'country' => $this->faker->word,
        'remember_token' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
