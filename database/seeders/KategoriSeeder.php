<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['id' => 1, 'nama_kategori' => 'Webinar & Seminar', 'created_at' => '2026-03-10 09:12:57', 'updated_at' => null],
            ['id' => 2, 'nama_kategori' => 'Kompetisi', 'created_at' => '2026-03-10 09:12:57', 'updated_at' => null],
            ['id' => 3, 'nama_kategori' => 'Acara Kampus', 'created_at' => '2026-03-10 09:13:55', 'updated_at' => null],
            ['id' => 4, 'nama_kategori' => 'Workshop', 'created_at' => '2026-03-10 09:13:55', 'updated_at' => null],
        ];

        foreach ($data as $item) {
            DB::table('kategori')->updateOrInsert(['id' => $item['id']], $item);
        }
    }
}
