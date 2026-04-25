<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diem extends Model
{
    protected $fillable = ['pham_duc_quyen_id', 'ten_mon_hoc', 'diem'];

    public function phamDucQuyen()
    {
        return $this->belongsTo(PhamDucQuyen::class);
    }
}
