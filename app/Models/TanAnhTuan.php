<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TanAnhTuan extends Model
{
    protected $fillable = ['ma_sv', 'ho_ten'];

    public function diems()
    {
        return $this->hasMany(Diem::class);
    }
}
