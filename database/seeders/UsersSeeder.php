<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id_user' => 7,
                'nama_lengkap' => 'Admin IBIK',
                'email' => 'admin@ibik.ac.id',
                'username' => 'adminibik',
                'no_hp' => '081234567890',
                'kategori_pendaftar' => 'Umum',
                'password' => '$2y$12$KcUpSLxxzCcc.1GugU.zGuDi6n8scPkTo6KrBYUJbWghQO18vgxLu', // Hash from SQL
                'role' => 'admin',
                'created_at' => '2026-04-17 16:17:38',
                'updated_at' => '2026-04-17 16:17:38'
            ],
            [
                'id_user' => 12,
                'nama_lengkap' => 'CDC',
                'email' => 'cdc@ibik.com',
                'username' => null,
                'no_hp' => '0812345678',
                'kategori_pendaftar' => 'Unit Kerja',
                'password' => '$2y$12$seSXcwLBQstQWrntIwYmfeNKObUBoMIv6D0o..bp4EMBsbWJhDGLu', // Hash from SQL
                'role' => 'penyelenggara',
                'email_verified_at' => '2026-04-24 17:25:07',
                'created_at' => '2026-04-24 17:01:08',
                'updated_at' => '2026-04-24 17:25:07'
            ],
            [
                'id_user' => 1,
                'nama_lengkap' => 'Test User',
                'email' => 'test@example.com',
                'username' => null,
                'no_hp' => '08123456789',
                'kategori_pendaftar' => 'peserta',
                'password' => '$2y$12$fdsiOl9yy/zOyu7SNFYSv.e5bQURKaEps79nL1WhNr0StJI5g974C', // Hash from SQL
                'role' => 'user',
                'created_at' => '2026-04-15 00:11:16',
                'updated_at' => '2026-04-15 00:11:16'
            ]
        ];

        foreach ($data as $item) {
            DB::table('users')->updateOrInsert(['id_user' => $item['id_user']], $item);
        }
    }
}
