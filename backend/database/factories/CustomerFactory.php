<?php
namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName'  => $this->faker->lastName(),
            'email'     => $this->faker->safeEmail,
            'phone'     => $this->faker->phoneNumber,
            'password'  => bcrypt(111111),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (Customer $customer) {
            // Actions to take after making the customer model
        })->afterCreating(function (Customer $customer) {
            // Use the public_path() helper instead of asset()
            $avatarPath = public_path('images/avatars/' . $this->faker->numberBetween(1, 10) . '.png');

            // Ensure the file exists before attempting to add it
            if (file_exists($avatarPath)) {
                $customer->addMedia($avatarPath)->toMediaCollection('profile-photo');
            } else {
                // Optional: Log or handle the case where the image doesn't exist
                \Log::warning("Avatar image not found: {$avatarPath}");
            }
        });
    }
}
