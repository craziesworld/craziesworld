<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string  value
 * @property Carbon  created_at
 * @property Carbon  updated_at
 */
class Keyword extends Model
{
    /**
     * 获得此关键词的所有文章
     */
    public function article()
    {
        return $this->belongsToMany('App\Model\Article');
    }
}
