<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\JobTag;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Job::factory(4)->create();
        Tag::factory(5)->create();

        JobTag::factory(40)->create();


    }
}
