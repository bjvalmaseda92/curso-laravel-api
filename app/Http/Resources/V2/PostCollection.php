<?php

namespace App\Http\Resources\V2;

use App\Models\Post;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    public $collects = PostResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "data" => $this->collection,
            "meta" => [
                "organization" => "TriniPixel",
                "author" => "bjvalmaseda",
                "type" => "post",
            ],
        ];
    }
}
