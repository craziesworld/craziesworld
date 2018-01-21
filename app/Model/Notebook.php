<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string  name
 * @property string  description
 * @property integer visit
 * @property integer user_id
 * @property Carbon  created_at
 * @property Carbon  updated_at
 */
class Notebook extends Model
{
    public function articles()
    {
        return $this->hasMany('App\Model\Article');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function addArticle(Article $article)
    {
        $article->notebook_id = $this->id;
        $article->save();
        return $article;
    }
}
