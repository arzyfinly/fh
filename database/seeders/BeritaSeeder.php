<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $berita = [
            [
                'keyword'               => 'Informasi Pendidikan Fakultas Hukum UNIBA Madura',
                'image_header'          => 'default.JPG',
                'category_berita_id'   => '1',
            ],
            [
                'keyword'               => 'Pengumuman Fakultas Hukum UNIBA Madura',
                'image_header'          => 'default.JPG',
                'category_berita_id'   => '2',
            ],
            [
                'keyword'               => 'Agenda Fakultas Hukum UNIBA Madura',
                'image_header'          => 'default.JPG',
                'category_berita_id'   => '3',
            ],
        ];

        foreach ($berita as $row) {
            Berita::create($row);
        }
    }
}
