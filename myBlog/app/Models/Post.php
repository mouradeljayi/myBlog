<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable =  ['title', 'slug', 'content'];

    public function getRouteKeyName()
    {
      return 'slug';
    }

    public function asJson($value)
    {
      return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
