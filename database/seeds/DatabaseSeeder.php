<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(BlogTagTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
    }
}
