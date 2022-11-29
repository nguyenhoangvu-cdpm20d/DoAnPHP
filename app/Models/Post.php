<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Models\Quan;
use App\Models\Phuong;
use App\Models\LoaiDo;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;
    protected $table = "Bai_Viet";
    protected $fillable = [
        'id', 
        'Title',
        'noidung',
        'TenTK',
        'TK_id',
        'image',
        'ngaydang',
        'loaidovat_id',
        'loaibaiviet_id',
        'quan',
        'phuong',
        'luotxem',
        'binhluan',
        'trang_thai'];

        public function quan(){
            return $this->belongsTo(Quan::class,);
        }

        public function phuong(){
            return $this->belongsTo(Phuong::class,);
        }

        public function postdetail(){
            return $this->belongsTo(Post::class);
        }

        public function loaidovat(){
            return $this->belongsTo(LoaiDo::class);
        }
}
