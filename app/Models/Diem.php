<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diem extends Model
{
    protected $fillable = ['tan_anh_tuan_id', 'ten_mon_hoc', 'diem'];

    public function tanAnhTuan()
    {
        return $this->belongsTo(TanAnhTuan::class);
    }
}
