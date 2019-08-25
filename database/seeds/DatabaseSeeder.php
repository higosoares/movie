<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeed::class);
        $this->call(MovieSeed::class);
        $this->call(CategorySeed::class);
        $this->call(MovieCategorySeed::class);
        $this->call(ProfileSeed::class);
        $this->call(UserProfileSeed::class);
    }
}
