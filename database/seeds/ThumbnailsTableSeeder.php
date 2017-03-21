<?php

use Illuminate\Database\Seeder;

class ThumbnailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('thumbnails');
        $thumbnails = [
            [
                'id' => 1,
                'src' => 'https://i.ytimg.com/vi/G9bw8i1WJVU/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 2,
                'src' => 'https://i.ytimg.com/vi/QTOEpfLDaVo/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 3,
                'src' => 'https://i.ytimg.com/vi/hPTDdGVf76g/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 4,
                'src' => 'https://i.ytimg.com/vi/YfZWG7PZSe8/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 5,
                'src' => 'https://i.ytimg.com/vi/zGBDWngOaUE/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 6,
                'src' => 'https://i.ytimg.com/vi/eSE9SQgtDIc/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 7,
                'src' => 'https://i.ytimg.com/vi/2Y5HoQP9XwM/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 8,
                'src' => 'https://i.ytimg.com/vi/4Ycvo7xZHUg/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 9,
                'src' => 'https://i.ytimg.com/vi/z3AKidcwe5c/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
            [
                'id' => 10,
                'src' => 'https://i.ytimg.com/vi/TQVEkH7iG5o/mqdefault.jpg',
                'width' => 320,
                'height' => 180,
                'extension' => 'jpg',
            ],
        ];
        foreach ($thumbnails as $thumbnail) {
            DB::table('thumbnails')->insert($thumbnail);
        }
    }
}
