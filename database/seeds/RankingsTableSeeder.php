<?php

use Illuminate\Database\Seeder;

class RankingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('rankings');
        $rankings = [
            [
                'id'       => 1,
                'type'     => 'movie',
                'title'    => '東京03の面白いコントランキング！！',
            ],
            [
                'id'       => 2,
                'type'     => 'movie',
                'title'    => 'サンドウィッチマンの面白いコントランキング！！',
            ],
        ];
        foreach ($rankings as $ranking) {
            DB::table('rankings')->insert($ranking);
        }
    }
}
