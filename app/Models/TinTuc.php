<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TinTuc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "tin_tuc";
    protected $fillable = [
        'id', 
        'Title',
        'noidung',
        'image',
        'ngaydang',
        'trang_thai'];
}
