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
        $this->call(User::class);
        $this->call(Categories::class);
        $this->call(ConfigsSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(Posts::class);
    }
}
