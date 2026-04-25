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
        $sv1 = \App\Models\PhamDucQuyen::create([
            'ma_sv' => 'SV001',
            'ho_ten' => 'Phạm Đức Quyền'
        ]);

        \App\Models\Diem::create(['pham_duc_quyen_id' => $sv1->id, 'ten_mon_hoc' => 'Lập trình Web', 'diem' => 8.5]);
        \App\Models\Diem::create(['pham_duc_quyen_id' => $sv1->id, 'ten_mon_hoc' => 'Cơ sở dữ liệu', 'diem' => 7.0]);

        $sv2 = \App\Models\PhamDucQuyen::create([
            'ma_sv' => 'SV002',
            'ho_ten' => 'Nguyễn Văn A'
        ]);

        \App\Models\Diem::create(['pham_duc_quyen_id' => $sv2->id, 'ten_mon_hoc' => 'Lập trình Web', 'diem' => 9.0]);
    }
}
