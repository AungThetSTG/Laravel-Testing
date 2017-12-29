<?php
use App\Models\Login;
use App\Models\Teacher;
use App\Models\Student;

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
        Login::truncate();
        Teacher::truncate();

        $this->persistAdmin();
        
        factory(Teacher::class, 5)->create();
        factory(Student::class, 5)->create();
    }

    public function persistAdmin(){
        DB::table('logins')->insert([
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('secretadmin'),
            'role'      => 'admin',
            'verified'  => '1'
        ]);
    }
}
