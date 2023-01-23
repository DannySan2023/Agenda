<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Limpieza facial',
            'duration' => 90,
        ]);

        Service::create([
            'name' => 'Corte de Cabello',
            'duration' => 30,
        ]);

        Service::create([
            'name' => 'Tinturado de Cabello',
            'duration' => 180,
        ]);

        Service::create([
            'name' => 'Maquillaje',
            'duration' => 40,
        ]);
    }
}
