<?php

namespace App\Models;

use App\Http\Constants\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'image',
        'description',
        'content',
        'views',
        'status',
        'user_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getStatus(){
        if($this->status == Status::$ACTIVE){
            return "Đã đăng";
        }
        return "Bản nháp";
    }
}
