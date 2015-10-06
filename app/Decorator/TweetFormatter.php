<?php
/**
 * Created by PhpStorm.
 * User: rulian
 * Date: 10/3/15
 * Time: 12:55 PM
 */

namespace App\Decorator;


use Illuminate\Database\Eloquent\Collection;

class TweetFormatter
{
    /**
     * @var Collection
     */
    private $tweets;

    public function __construct(Collection $tweets){

        $this->tweets = $tweets;
    }

    public function toArray(){

        $tweet_collection = [];
        foreach($this->tweets as $tweet){
            array_push($tweet_collection, [
                'name'=>$tweet->user->username,
                'tweet'=>$tweet->tweet,
                'profile'=>$tweet->user->profile_url(),
                'date'=>$tweet->created_at->diffForHumans()
            ]);
        }

        return new Collection($tweet_collection);
    }
}