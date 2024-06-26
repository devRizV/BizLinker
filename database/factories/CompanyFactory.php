<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
        *
        * The variable is for random Companytype choice.
        *
        */
        $companyTypes = [
            'Type A', 'Type B', 'Type C', 'Type D', 'Type E', 'Type F', 'Type G', 'Type H', 'Type I', 'Type J',
        ];
        return [
            'company_title' => $this->faker->company,
            'mobile_no' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'domain' => $this->faker->domainName,
            'url' => $this->faker->url,
            'company_type' => $this->faker->randomElement($companyTypes),
            'meta_desc' => $this->faker->sentence,
            'address' => $this->faker->address,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
