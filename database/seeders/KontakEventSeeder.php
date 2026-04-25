<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakEventSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'nama' => 'adinda fatimah',
                'email' => 'adindaqori123@gmail.com',
                'no_hp' => '083169221045',
                'judul_event' => 'Pengajuan Admin penyelenggara',
                'deskripsi_event' => 'kepada admin yang terhormat',
                'pesan' => 'hai bagaimana caranya jika saya ingin membuat akun penyelenggara?',
                'balasan' => 'bisaa saya kabarin lagi ya',
                'replied_at' => '2026-04-24 03:23:37',
                'status' => 'replied',
                'created_at' => '2026-04-24 03:14:06',
                'updated_at' => '2026-04-24 03:23:37'
            ],
            [
                'id' => 2,
                'nama' => 'adinda fatimah',
                'email' => 'adindaqori123@gmail.com',
                'no_hp' => '083169221045',
                'judul_event' => 'tindak lanjut masalah admin',
                'deskripsi_event' => '',
                'pesan' => 'baik terimakasih',
                'balasan' => 'dengan senang hati',
                'replied_at' => '2026-04-24 03:37:07',
                'status' => 'replied',
                'created_at' => '2026-04-24 03:36:10',
                'updated_at' => '2026-04-24 03:37:07'
            ],
            [
                'id' => 3,
                'nama' => 'dindun',
                'email' => 'adindaqori123@gmail.com',
                'no_hp' => '08412131324',
                'judul_event' => 'uji coba',
                'deskripsi_event' => '',
                'pesan' => 'hai admin',
                'balasan' => 'hai juga user',
                'replied_at' => '2026-04-24 03:45:40',
                'status' => 'replied',
                'created_at' => '2026-04-24 03:45:22',
                'updated_at' => '2026-04-24 03:45:40'
            ],
        ];

        foreach ($data as $item) {
            DB::table('kontak_event')->updateOrInsert(['id' => $item['id']], $item);
        }
    }
}
