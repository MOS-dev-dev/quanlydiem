<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $sv1 = \App\Models\TanAnhTuan::create([
            'ma_sv' => 'SV001',
            'ho_ten' => 'Tăng Anh Tuấn'
        ]);

        \App\Models\Diem::create(['tan_anh_tuan_id' => $sv1->id, 'ten_mon_hoc' => 'Lập trình Web', 'diem' => 8.5]);
        \App\Models\Diem::create(['tan_anh_tuan_id' => $sv1->id, 'ten_mon_hoc' => 'Cơ sở dữ liệu', 'diem' => 7.0]);

        $sv2 = \App\Models\TanAnhTuan::create([
            'ma_sv' => 'SV002',
            'ho_ten' => 'Nguyễn Văn A'
        ]);

        \App\Models\Diem::create(['tan_anh_tuan_id' => $sv2->id, 'ten_mon_hoc' => 'Lập trình Web', 'diem' => 9.0]);
    }
}
