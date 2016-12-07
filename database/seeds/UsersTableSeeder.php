<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Adds the new users Jill and Jamal.
     *
     * @return void
     */
    public function run()
    {
        // Use bcrypt so passwords are secure. This is the same thing that
        // register uses.
        
        DB::table('users')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Jill',
            'email' => 'jill@harvard.edu',
            'password' => bcrypt('helloworld'),
        ]);

        DB::table('users')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Jamal',
            'email' => 'jamal@harvard.edu',
            'password' => bcrypt('helloworld'),
        ]);
    }
}
