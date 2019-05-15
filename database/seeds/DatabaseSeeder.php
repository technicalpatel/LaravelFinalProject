<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('comment')->insert(["cmt_id"=>2,
    		"cmt_name"=>"mast",
    		"cmt_description"=>"BOV MAST"]);

    	DB::table('comment')->insert(["cmt_id"=>2,
    		"cmt_name"=>"mast 2",
    		"cmt_description"=>"BOV MAST 2"]);

    	DB::table('comment')->insert(["cmt_id"=>2,
    		"cmt_name"=>"mast 3",
    		"cmt_description"=>"BOV MAST 3"]);

    	DB::table('comment')->insert(["cmt_id"=>2,
    		"cmt_name"=>"mast 4",
    		"cmt_description"=>"BOV MAST 4"]);
        // $this->call(UsersTableSeeder::class);
    }
}
