<?php

namespace Database\Factories;

use App\Models\Koumten;
use Illuminate\Database\Eloquent\Factories\Factory;

class KoumtenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Koumten::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
// config/app.phpで'faker_locale'を変更した場合は日本語対応している項目は日本語で生成される
        $faker = \Faker\Factory::create('ja_JP');

        return [
            'name' => $faker->company(),
            'address' => $faker->address(),
            // 'Available construction' = 
            // 'budget'=
            'contact address phone' => $faker->phoneNumber,
            'contact address mail' => $faker->freeEmailDomain,
            'latitude' => $faker->latitude($min = 26, $max = 43),
            'longitude' => $faker->longitude($min = 127.7, $max = 141.6),
        ];
    }
}
