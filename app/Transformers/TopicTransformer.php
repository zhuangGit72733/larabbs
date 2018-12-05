<?php

namespace App\Transformers;

use App\Models\Topic;
use App\Models\User;
use League\Fractal\TransformerAbstract;

class TopicTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['user', 'category'];

    public function transform(Topic $topic)
    {
        return [
            'id' => $topic->id,
            'title' => $topic->title,
            'body' => $topic->body,
            'user_id' => $topic->user_id,
            'category_id' => $topic->category_id,
            'reply_count' => $topic->reply_count,
            'view_count' => $topic->view_count,
            'last_reply_user_id' => $topic->last_reply_user_id,
            'excerpt' => $topic->excerpt,
            'slug' => $topic->slug,
            'created_at' => (string)$topic->created_at,
            'updated_at' => (string)$topic->updated_at,
        ];
    }

    public function includeUser(Topic $topic)
    {
//        if (!$topic->user) {
//            return $this->item(User::find(1), new UserTransformer());
//        }
        return $this->item($topic->user, new UserTransformer());
    }

    public function includeCategory(Topic $topic)
    {
        return $this->item($topic->category, new CategoryTransformer());
    }
}