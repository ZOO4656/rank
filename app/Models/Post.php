<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const PROVIDER_YOUTUBE = 'youtube';
    public $fillable = ['type', 'user_id', 'ranking_id', 'title', 'src', 'thumbnail_id', 'provider'];

    /**
     * Youtube動画のURLから動画IDを取得
     * @param string $url 動画URL
     * @return string|bool
     */
    public static function getYoutubeIdByUrl($url)
    {
        preg_match('/\?v=([^&]+)/', $url, $match);
        $id = $match[1];
        if (!empty($id)) {
            return $id;
        }
        return false;
    }
}
