<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('member_log')->insert(array(
            ['uid'=>'0077505', 'name'=>'Subjek #1', 'occupation'=>'student', 'bookid'=>'1', 'category'=>'novel', 'title'=>'monolog', 'stock'=>'5', 'borrowdate'=>'2023-12-31', 'returndate'=>'2024-01-02', 'status'=>'returned'],
            ['uid'=>'0077506', 'name'=>'Subjek #2', 'occupation'=>'student', 'bookid'=>'1', 'category'=>'novel', 'title'=>'monolog', 'stock'=>'5', 'borrowdate'=>'2023-12-31', 'returndate'=>'2024-01-02', 'status'=>'returned'],
            ['uid'=>'0078505', 'name'=>'Subjek #3', 'occupation'=>'teacher', 'bookid'=>'1', 'category'=>'novel', 'title'=>'monolog', 'stock'=>'5', 'borrowdate'=>'2023-12-31', 'returndate'=>'2024-01-02', 'status'=>'returned'],
            ['uid'=>'0077507', 'name'=>'Subjek #4', 'occupation'=>'student', 'bookid'=>'1', 'category'=>'novel', 'title'=>'monolog', 'stock'=>'5', 'borrowdate'=>'2023-12-31', 'returndate'=>'2024-01-02', 'status'=>'returned'],
        ));
    }
}
