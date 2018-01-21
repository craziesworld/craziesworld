<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string  title
 * @property string  description
 * @property integer visit
 * @property integer article_content_id
 * @property integer notebook_id
 * @property integer user_id
 * @property Carbon  created_at
 * @property Carbon  updated_at
 */
class Article extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function notebook()
    {
        return $this->belongsTo('App\Model\Notebook');
    }

    public function content()
    {
        return $this->hasOne('App\Model\ArticleContent');
    }

    /**
     * 获得此文章的所有关键词
     */
    public function keywords()
    {
        return $this->belongsToMany('App\Model\Keyword');
    }
}
