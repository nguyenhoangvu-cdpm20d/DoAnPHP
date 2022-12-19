<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaoCao extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "baocao";
    protected $fillable = [
        'id',
        'Username',
        'noidung',
        'idBaiViet',
        'trang_thai'];
}
