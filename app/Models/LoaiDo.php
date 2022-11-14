<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiDo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "loai_do_vat";
    protected $fillable = ['id', 'loaido'];
}
