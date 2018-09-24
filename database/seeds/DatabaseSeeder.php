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
        // $this->call(Header::class);
        // $this->call(Footer::class);
        // $this->call(IntroducePage::class);
        // $this->call(ProductPage::class);
        // $this->call(FaqsPage::class);
        // $this->call(ContactPage::class);
        // $this->call(HomePage::class);
        // $this->call(User::class);
        $this->call(Categories::class);
        $this->call(Posts::class);
    }
}
