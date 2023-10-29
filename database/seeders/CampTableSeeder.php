<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Camps;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $campss = [
            [
                'title' => "Gila Belajra",
                'slug' => 'gila-belajar',
                'price' => 280,
                // 'create_at' => date('Y-m-d H:i:s:', time()),
                // 'update_at' => date('Y-m-d H:i:s:', time()),
            ],
            [
                'title' => "Baru Mulai",
                'slug' => 'baru-mulai',
                'price' => 140,
                // 'create_at' => date('Y-m-d H:i:s:', time()),
                // 'update_at' => date('Y-m-d H:i:s:', time()),
            ],
        ];
        foreach ($campss as $key => $Camps) {
            Camps::created($Camps);
        }
    }
}
