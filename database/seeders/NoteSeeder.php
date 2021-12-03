<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notes')->insert([
            ["description"=> "lam du an"]
//            ["category_id"=> "","description"=> "lam du an", "user_id"=> ""],
//            ["category_id"=> "","description"=> "vao thu bay hang tuan", "user_id"=> ""]
        ]);
    }
}
