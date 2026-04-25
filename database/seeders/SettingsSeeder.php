<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'key' => 'homepage_hero_header',
                'value' => '{"title":"Temukan Event Luar Biasa & Tiket Eksklusif.","subtitle":"Daftar dan beli tiket event favorit Anda — konser, seminar, workshop — dari berbagai organizer terpercaya dalam satu platform."}',
                'created_at' => '2026-04-20 07:34:03',
                'updated_at' => '2026-04-20 07:34:03'
            ],
            [
                'id' => 2,
                'key' => 'homepage_banners',
                'value' => '[{"id":"banner-9","title":"Festival Budaya","subtitle":"tes...","date":"20 APR 2026","foto_event_url":"https://res.cloudinary.com/dvf7vclov/image/upload/f_auto,q_auto/v1745472251/default-event_zpxqzm.jpg"},{"id":"banner-8","title":"Keamanan Siber","subtitle":"Personal Branding in the Digital Era...","date":"20 APR 2026","foto_event_url":"https://res.cloudinary.com/dvf7vclov/image/upload/f_auto,q_auto/v1745472251/default-event_zpxqzm.jpg"},{"id":"banner-7","title":"Workshop Laravel","subtitle":"sdsdasdwds...","date":"23 APR 2026","foto_event_url":"https://res.cloudinary.com/dvf7vclov/image/upload/f_auto,q_auto/v1745472251/default-event_zpxqzm.jpg"}]',
                'created_at' => '2026-04-20 07:34:03',
                'updated_at' => '2026-04-20 07:34:03'
            ],
            [
                'id' => 3,
                'key' => 'homepage_hero_cards',
                'value' => '[{"id":"hero-9","title":"Seminar AI","price":"Rp50.000","handle":"@panitia","imageUrl":"https://res.cloudinary.com/dvf7vclov/image/upload/f_auto,q_auto/v1745472251/default-event_zpxqzm.jpg"},{"id":"hero-8","title":"UI/UX Design","price":"Rp75.000","handle":"@panitia","imageUrl":"https://res.cloudinary.com/dvf7vclov/image/upload/f_auto,q_auto/v1745472251/default-event_zpxqzm.jpg"},{"id":"hero-7","title":"Workshop Laravel","price":"Rp150.00","handle":"@panitia","imageUrl":"https://res.cloudinary.com/dvf7vclov/image/upload/f_auto,q_auto/v1745472251/default-event_zpxqzm.jpg"}]',
                'created_at' => '2026-04-20 07:34:03',
                'updated_at' => '2026-04-20 07:34:03'
            ],
        ];

        foreach ($data as $item) {
            DB::table('settings')->updateOrInsert(['id' => $item['id']], $item);
        }
    }
}
