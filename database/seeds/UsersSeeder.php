<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;
use \App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'User A',
            'email' => 'user_ax@gmail.com',
            'password' => Hash::make('testpass'),
            'company_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $user->assign('role-a');

        $user = User::create([
            'name' => 'User B',
            'email' => 'user_b@gmail.com',
            'password' => Hash::make('testpass'),
            'company_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $user->assign('role-b');

        $user = User::create([
            'name' => 'User C',
            'email' => 'user_c@gmail.com',
            'password' => Hash::make('testpass'),
            'company_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $user->assign('role-c');

        $user = User::create([
            'name' => 'User D',
            'email' => 'user_d@gmail.com',
            'password' => Hash::make('testpass'),
            'company_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $user->assign('role-a');

        $user = User::create([
            'name' => 'User E',
            'email' => 'user_e@gmail.com',
            'password' => Hash::make('testpass'),
            'company_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $user->assign('role-b');

        $user = User::create([
            'name' => 'User F',
            'email' => 'user_f@gmail.com',
            'password' => Hash::make('testpass'),
            'company_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        $user->assign('role-d');
    }
}
