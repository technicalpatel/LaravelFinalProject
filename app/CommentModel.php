<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PostModel;
class CommentModel extends Model
{
    protected $table='comment';

    public function pst()
    {
    	return $this->belongsTo(PostModel::class,'cmt_id',
    		'id');
    }
}
