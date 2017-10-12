<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name'=>'Gabriel Rodríguez',
        'email'=>'web@hablemosdesalud.com.co',
        'password'=>bcrypt('6164736701'),
      ]);
    }
}
