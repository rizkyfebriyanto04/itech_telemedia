<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Jalankan database seeder.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_field' => 'Url Web Report',
                'nilai_field' => 'https://webreport.itechtelemedia.co.id',
                'created_at' => '2025-11-13 13:13:29',
                'updated_at' => '2025-11-13 13:13:31',
            ],
            [
                'nama_field' => 'Url Link Apk',
                'nilai_field' => 'https://drive.google.com/file/d/1M3g2rGPk4qnev1waEpmt-579ru82fZLG/view?usp=drive_link',
                'created_at' => '2025-11-13 13:14:11',
                'updated_at' => '2025-11-13 13:14:17',
            ],
            [
                'nama_field' => 'Url Pop Up Wa',
                'nilai_field' => 'https://wa.me/6281802144757?text=Halo%20Saya%20Mau%20Tanya',
                'created_at' => '2025-11-13 13:17:26',
                'updated_at' => '2025-11-13 13:17:29',
            ],
            [
                'nama_field' => 'Url Cs Wa',
                'nilai_field' => 'https://wa.me/6281802144757',
                'created_at' => '2025-11-13 13:17:32',
                'updated_at' => '2025-11-13 13:17:34',
            ],
            [
                'nama_field' => 'Url Cs Telegram',
                'nilai_field' => 'https://t.me/Cs_itech01',
                'created_at' => '2025-11-13 13:17:37',
                'updated_at' => '2025-11-13 13:17:39',
            ],
            [
                'nama_field' => 'Url Center Wa 1',
                'nilai_field' => 'https://wa.me/6285720165555',
                'created_at' => '2025-11-13 13:19:01',
                'updated_at' => '2025-11-13 13:19:04',
            ],
            [
                'nama_field' => 'Url Center Wa 2',
                'nilai_field' => 'https://wa.me/6287825981888',
                'created_at' => '2025-11-13 13:19:06',
                'updated_at' => '2025-11-13 13:19:08',
            ],
            [
                'nama_field' => 'Url Center Wa 3',
                'nilai_field' => 'https://wa.me/6281220826161',
                'created_at' => '2025-11-13 13:19:10',
                'updated_at' => '2025-11-13 13:19:13',
            ],
        ];

        Setting::insert($data);
    }
}
