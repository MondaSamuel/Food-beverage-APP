<?php

namespace Database\Factories;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
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
            'category_id'  => $this->faker->randomElement(Category::pluck('id')->toArray()),
            'name'         => Str::title($this->faker->word()) . " " . Str::title($this->faker->word()),
            'sku'          => "WP" . $this->faker->randomNumber(4),
            'price'        => $this->faker->numberBetween(1, 100) * 10,
            'quantity'     => $this->faker->numberBetween(1, 100) * 10,
            'description'  => $this->faker->paragraph,
            'unit_id'      => $this->faker->randomElement(Unit::pluck('id')->toArray()),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (Product $product) {
            //
        })->afterCreating(function (Product $product) {
            // Use public_path() instead of asset() to get the file path
            $imagePath = public_path('images/foods/' . $this->faker->numberBetween(1, 12) . '.png');

            if (file_exists($imagePath)) {
                $product->addMedia($imagePath)->toMediaCollection('product-photo');
            } else {
                // Handle the case when the file does not exist (optional)
                //Log::warning("Image file not found: " . $imagePath);
            }
        });
    }
}
