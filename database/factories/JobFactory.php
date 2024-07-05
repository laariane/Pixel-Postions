<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Defining a random function for the schedule col
     */
    public function randomSchedule(){
        $schedules=["Full Time","Freelance","Part Time"];
        return $schedules[array_rand($schedules)];
    }


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employer_id"=>Employer::factory(),
            "title"=>fake()->jobTitle(),
            "salary"=>fake()->randomElement(["10,000$","30,000$","40,000$","60,000$","50,000$"]),
            "location"=>fake()->city(),
            "schedule"=>fake()->randomElement(["Full Time","Freelance","Part Time"]),
            "url"=>fake()->url(),
            "featured"=>'false',
        ];
     }
}
