<?php

namespace App;
use App\CommentModel;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table='post';

    protected $fillable=["post_type","post_name","post_date","post_time"];

    public $timestamps=false;

    public function cmt()
    {
    	return $this->hasMany(CommentModel::class,'cmt_id',
    		'id');
    }
}
