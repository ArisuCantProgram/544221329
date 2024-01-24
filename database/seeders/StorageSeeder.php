<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('storage')->insert(array(
            ['category'=>'novel', 'title'=>'cascade far away', 'stock'=>'5'],
            ['category'=>'comic', 'title'=>'WHY?', 'stock'=>'5'],
            ['category'=>'comic', 'title'=>'Jujutsu Kaisen Vol.4', 'stock'=>'5'],
            ['category'=>'novel', 'title'=>'dilan 1990', 'stock'=>'5'],
            ['category'=>'comic', 'title'=>'landscape', 'stock'=>'5'],
            ['category'=>'novel', 'title'=>'monolog', 'stock'=>'5'],
        ));
    }
}
