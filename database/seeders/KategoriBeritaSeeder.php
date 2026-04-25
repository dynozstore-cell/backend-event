<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBeritaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['id' => 1, 'nama_kategori' => 'Technology', 'created_at' => '2026-04-18 00:36:01', 'updated_at' => '2026-04-18 00:36:01'],
            ['id' => 2, 'nama_kategori' => 'Tips & Tricks', 'created_at' => '2026-04-18 00:36:01', 'updated_at' => '2026-04-18 00:36:01'],
            ['id' => 3, 'nama_kategori' => 'Inspirasi', 'created_at' => '2026-04-18 00:36:01', 'updated_at' => '2026-04-18 00:36:01'],
            ['id' => 4, 'nama_kategori' => 'Analysis', 'created_at' => '2026-04-18 00:36:01', 'updated_at' => '2026-04-18 00:36:01'],
            ['id' => 5, 'nama_kategori' => 'Business', 'created_at' => '2026-04-18 00:36:01', 'updated_at' => '2026-04-18 00:36:01'],
        ];

        foreach ($data as $item) {
            DB::table('kategori_berita')->updateOrInsert(['id' => $item['id']], $item);
        }
    }
}
