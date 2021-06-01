<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, HasTranslations, Sluggable;

    protected $guarded = [];

    public $translatable =  ['title', 'slug', 'body'];

    public function sluggable()
    {
        return [
            'slug->en' => [
                'source' => 'titleen'
            ],
            'slug->ar' => [
                'source' => 'titlear'
            ],
            'slug->fr' => [
                'source' => 'titlefr'
            ]
        ];
    }

    public function getTitleenAttribute()
    {
      return $this->getTranslation('title', 'en');
    }

    public function getTitlearAttribute()
    {
      return $this->getTranslation('title', 'ar');
    }

    public function getTitlefrAttribute()
    {
      return $this->getTranslation('title', 'fr');
    }

    public function getRouteKeyName()
    {
      return 'slug';
    }

    public function asJson($value)
    {
      return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
