<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Invoice;
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
            'name' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'invoice_id' => Invoice::factory(),
            'quantity' => $this->faker->numerify('#'),
            'price' => 1999.99,
        ];
    }
}
