<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostYoutubeStoreRequest;
use App\Models\Post;
use App\Models\Ranking;
use App\Models\Thumbnail;
use Google_Client;
use Google_Service_YouTube;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($ranking_id)
    {
        return view('post.create')
            ->with([
                'ranking' => Ranking::find($ranking_id),
                'type' => Ranking::MOVIE,
                'user' => \Auth::user(),
            ]);
    }

    public function store(PostYoutubeStoreRequest $request)
    {
        $input = $request->only(['url', 'type', 'user_id', 'ranking_id']);
        $client = new Google_Client();
        $client->setDeveloperKey(env('GOOGLE_API_KEY'));
        $youtube = new Google_Service_YouTube($client);
        $post_id = Post::getYoutubeIdByUrl($input['url']);

        $res = $youtube->videos->listVideos(
            'snippet',
            [
                'id' => $post_id,
            ]
        )->getItems()[0]->getSnippet();

        \DB::transaction(function() use ($post_id, $input, $res) {
            // サムネイル保存
            $thumbnail = Thumbnail::create([
                'src' => $res->getThumbnails()->getMedium()->getUrl(),
                'width' => $res->getThumbnails()->getMedium()->getWidth(),
                'height' => $res->getThumbnails()->getMedium()->getHeight(),
                'extension' => pathinfo($res->getThumbnails()->getMedium()->getUrl(), PATHINFO_EXTENSION),
            ]);

            // 投稿
            Post::create([
                'type' => $input['type'],
                'user_id' => $input['user_id'],
                'ranking_id' => $input['ranking_id'],
                'title' => $res->getTitle(),
                'src' => $post_id,
                'thumbnail_id' => $thumbnail->id,
            ]);

        });

        return redirect('/');
    }
}
