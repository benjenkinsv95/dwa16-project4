<?php

use App\User;
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

        # Names capitalized in p4 requirements http://dwa15.com/Projects.../P4
        $users = [
            ['jill@harvard.edu','Jill','helloworld'],
            ['jamal@harvard.edu','Jamal','helloworld'],
            ['benjenkinsv95@gmail.com','Ben','helloworld']
        ];

        # Get existing users to prevent duplicates
        $existingUsers = User::all()->keyBy('email')->toArray();

        foreach($users as $user) {

            # If the user does not already exist, add them
            if(!array_key_exists($user[0],$existingUsers)) {
                $user = User::create([
                    'email' => $user[0],
                    'name' => $user[1],
                    'password' => Hash::make($user[2]),
                ]);
            }
        }
    }
}
