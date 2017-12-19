<?php
use App\User;
use App\Post;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    private $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Post::truncate();

        factory(User::class, 10)->create();
        factory(Post::class, 50)->create();
    }
}
