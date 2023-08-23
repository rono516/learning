<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('modules')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $module = new Module();
        $module->title = 'Eloquent ORM in modern Laravel';
        $module->course_id = 1;
        $module->user_id = 2;
        $module->text_content = 'When building APIs using Laravel, you will often need to convert your models.';
        $module->link_content = 'https://www.youtube.com/watch?v=9FdNiG-Nno8';
        $module->image_url = 'https://i.ibb.co/mJJNkTJ/img2.jpg';
        $module->save();
    }
}
