<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $user = new User();
        $user->user_group = 1; //super admin
        $user->name = 'Lms Admin';
        $user->email = 'lms@admin.com';
        $user->password = bcrypt('password');
        $user->save();

        $user = new User();
        $user->user_group = 2; //Lecturer
        $user->name = 'Lms Lecturer';
        $user->email = 'lms@lecturer.com';
        $user->password = bcrypt('password');
        $user->save();

        $user = new User();
        $user->user_group = 3;
        $user->name = 'Lms Student';
        $user->email = 'lms@student.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
