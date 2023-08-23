<?php

namespace Database\Seeders;

use App\Models\UserGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGRoupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('user_groups')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //1
        $userGroup = new UserGroup();
        $userGroup->name = 'SUPER ADMIN';
        $userGroup->save();

        //2
        $userGroup = new UserGroup();
        $userGroup->name = 'LECTURER';
        $userGroup->save();

        //3

        $userGroup = new UserGroup();
        $userGroup->name = 'STUDENT';
        $userGroup->save();
    }
}
