<?php

namespace App\Models;

use App\Http\Constants\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',

    ];

    public function getStatus(){
        if($this->status == Status::$ACTIVE){
            return "Kích hoạt";
        }
        return "Ngưng kích hoạt";
    }
}
