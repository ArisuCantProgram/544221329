<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('member_card')->insert(array(
            ['uid'=>'0077505', 'name'=>'Subjek #1', 'occupation'=>'student', 'limit'=>'2'],
            ['uid'=>'0077506', 'name'=>'Subjek #2', 'occupation'=>'student', 'limit'=>'2'],
            ['uid'=>'0078505', 'name'=>'Subjek #3', 'occupation'=>'teacher', 'limit'=>'5'],
            ['uid'=>'0077507', 'name'=>'Subjek #4', 'occupation'=>'student', 'limit'=>'2'],
        ));
    }
}
