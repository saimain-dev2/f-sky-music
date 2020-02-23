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
        // $this->call(UsersTableSeeder::class);
        // $this->call(AdminTableSeeder::class);
        // factory(App\Admin::class, 50)->create();
        factory(App\Model\Album::class, 50)->create();
        factory(App\Model\Category::class, 50)->create();
        factory(App\Model\Song::class, 50)->create();
        factory(App\Model\Download::class, 50)->create();
    }
}
