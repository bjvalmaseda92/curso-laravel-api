<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Post extends Model
{
    use HasFactory;

    protected function excerpt(): Attribute
    {
        return Attribute::make(get: fn() => substr($this->content, 0, 120));
    }

    protected function publishedAt(): Attribute
    {
        return Attribute::make(get: fn() => $this->created_at->format("d/m/Y"));
    }
}
