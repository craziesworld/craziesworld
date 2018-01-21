<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string  content
 * @property Carbon  created_at
 * @property Carbon  updated_at
 */
class ArticleContent extends Model
{
    public function article()
    {
        return $this->hasOne('App\Model\Article');
    }
}
