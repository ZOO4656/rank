<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('posts');
        $posts = [
            [
                'id' => 1,
                'type' => 'movie',
                'user_id' => 1,
                'ranking_id' => 1,
                'title' => '東京03 -  「課長の趣味」 ／ 『第11回東京03単独公演 「正論、異論、口論。」』より',
                'src' => 'G9bw8i1WJVU',
                'thumbnail_id' => 1,
                'provider' => 'youtube',
            ],
            [
                'id' => 2,
                'type' => 'movie',
                'user_id' => 1,
                'ranking_id' => 1,
                'title' => '東京03コント「許せる心」2015ライブツアー 動画',
                'src' => 'QTOEpfLDaVo',
                'thumbnail_id' => 2,
                'provider' => 'youtube',
            ],
            [
                'id' => 3,
                'type' => 'movie',
                'user_id' => 1,
                'ranking_id' => 1,
                'title' => '東京03　誰？',
                'src' => 'hPTDdGVf76g',
                'thumbnail_id' => 3,
                'provider' => 'youtube',
            ],
            [
                'id' => 4,
                'type' => 'movie',
                'user_id' => 1,
                'ranking_id' => 1,
                'title' => '東京03　魔が差して',
                'src' => 'YfZWG7PZSe8',
                'thumbnail_id' => 4,
                'provider' => 'youtube',
            ],
            [
                'id' => 5,
                'type' => 'movie',
                'user_id' => 1,
                'ranking_id' => 1,
                'title' => '東京03　市民の味方',
                'src' => 'zGBDWngOaUE',
                'thumbnail_id' => 5,
                'provider' => 'youtube',
            ],
            [
                'id' => 6,
                'type' => 'movie',
                'user_id' => 2,
                'ranking_id' => 1,
                'title' => '東京03　山の上の別荘',
                'src' => 'eSE9SQgtDIc',
                'thumbnail_id' => 6,
                'provider' => 'youtube',
            ],
            [
                'id' => 7,
                'type' => 'movie',
                'user_id' => 2,
                'ranking_id' => 1,
                'title' => '東京03　最終日',
                'src' => '2Y5HoQP9XwM',
                'thumbnail_id' => 7,
                'provider' => 'youtube',
            ],
            [
                'id' => 8,
                'type' => 'movie',
                'user_id' => 2,
                'ranking_id' => 1,
                'title' => '東京03　嫁の実家',
                'src' => '4Ycvo7xZHUg',
                'thumbnail_id' => 8,
                'provider' => 'youtube',
            ],
            [
                'id' => 9,
                'type' => 'movie',
                'user_id' => 2,
                'ranking_id' => 1,
                'title' => '東京03　不調の理由を言わないで！',
                'src' => 'z3AKidcwe5c',
                'thumbnail_id' => 9,
                'provider' => 'youtube',
            ],
            [
                'id' => 10,
                'type' => 'movie',
                'user_id' => 2,
                'ranking_id' => 1,
                'title' => '東京03 露骨',
                'src' => 'TQVEkH7iG5o',
                'thumbnail_id' => 10,
                'provider' => 'youtube',
            ],
        ];
        foreach ($posts as $post) {
            DB::table('posts')->insert($post);
        }
    }
}
