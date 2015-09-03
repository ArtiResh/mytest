<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

    protected $table = 'news';

    protected $fillable = [
        'title',
        'text_news',
        'url',
        'id',
        'created_at',
    ];
    protected $hidden = [
        'updated_at'
    ];

}
