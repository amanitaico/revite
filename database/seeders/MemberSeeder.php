<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name'=>'伊藤',
               'kana'=>'イトウ',
               'email'=>'itou@itou',
                'password'=>'iiiiiiiiii',
                 'tel'=>'0009988766',
                  'zip'=>'5780098',
	              'prefecture'=>'大阪',
	            	'address'=>'大阪市北区天満',
                'address2'=>'４丁目',
                'memo'=>'',
            ],
            [
                'name'=>'大川',
               'kana'=>'オオカア',
               'email'=>'okaw@okwa',
                'password'=>'komomon',
                 'tel'=>'9876789',
                  'zip'=>'9876544',
	              'prefecture'=>'兵庫県',
	            	'address'=>'神戸市北区',
                'address2'=>'上の町',
                'memo'=>'',
            ]
            
        ]);
    }
}
