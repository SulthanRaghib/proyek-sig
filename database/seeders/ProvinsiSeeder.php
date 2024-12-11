<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data from https://github.com/yusufsyaifudin/wilayah-indonesia/blob/master/data/sql/1570707455_create_provinces_table.sql

        DB::table('provinsis')->insert([
            [
                'name' => 'ACEH',
                'alt_name' => 'ACEH',
                'latitude' => 4.368550,
                'longitude' => 97.025300
            ],
            [
                'name' => 'SUMATERA UTARA',
                'alt_name' => 'SUMATERA UTARA',
                'latitude' => 2.192350,
                'longitude' => 99.381220
            ],
            [
                'name' => 'SUMATERA BARAT',
                'alt_name' => 'SUMATERA BARAT',
                'latitude' => -1.342250,
                'longitude' => 100.076100
            ],
            [
                'name' => 'RIAU',
                'alt_name' => 'RIAU',
                'latitude' => 0.500410,
                'longitude' => 101.547580
            ],
            [
                'name' => 'JAMBI',
                'alt_name' => 'JAMBI',
                'latitude' => -1.611570,
                'longitude' => 102.779700
            ],
            [
                'name' => 'SUMATERA SELATAN',
                'alt_name' => 'SUMATERA SELATAN',
                'latitude' => -3.126680,
                'longitude' => 104.093060
            ],
            [
                'name' => 'BENGKULU',
                'alt_name' => 'BENGKULU',
                'latitude' => -3.518680,
                'longitude' => 102.535980
            ],
            [
                'name' => 'LAMPUNG',
                'alt_name' => 'LAMPUNG',
                'latitude' => -4.855500,
                'longitude' => 105.027300
            ],
            [
                'name' => 'KEPULAUAN BANGKA BELITUNG',
                'alt_name' => 'KEPULAUAN BANGKA BELITUNG',
                'latitude' => -2.757750,
                'longitude' => 107.583940
            ],
            [
                'name' => 'KEPULAUAN RIAU',
                'alt_name' => 'KEPULAUAN RIAU',
                'latitude' => -0.154780,
                'longitude' => 104.580370
            ],
            [
                'name' => 'DKI JAKARTA',
                'alt_name' => 'DKI JAKARTA',
                'latitude' => 6.174500,
                'longitude' => 106.822700
            ],
            [
                'name' => 'JAWA BARAT',
                'alt_name' => 'JAWA BARAT',
                'latitude' => -6.889170,
                'longitude' => 107.640470
            ],
            [
                'name' => 'JAWA TENGAH',
                'alt_name' => 'JAWA TENGAH',
                'latitude' => -7.303240,
                'longitude' => 110.004410
            ],
            [
                'name' => 'DI YOGYAKARTA',
                'alt_name' => 'DI YOGYAKARTA',
                'latitude' => 7.795600,
                'longitude' => 110.369500
            ],
            [
                'name' => 'JAWA TIMUR',
                'alt_name' => 'JAWA TIMUR',
                'latitude' => -6.968510,
                'longitude' => 113.980050
            ],
            [
                'name' => 'BANTEN',
                'alt_name' => 'BANTEN',
                'latitude' => -6.445380,
                'longitude' => 106.137560
            ],
            [
                'name' => 'BALI',
                'alt_name' => 'BALI',
                'latitude' => -8.235660,
                'longitude' => 115.122390
            ],
            [
                'name' => 'NUSA TENGGARA BARAT',
                'alt_name' => 'NUSA TENGGARA BARAT',
                'latitude' => -8.121790,
                'longitude' => 117.636960
            ],
            [
                'name' => 'NUSA TENGGARA TIMUR',
                'alt_name' => 'NUSA TENGGARA TIMUR',
                'latitude' => -8.565680,
                'longitude' => 120.697860
            ],
            [
                'name' => 'KALIMANTAN BARAT',
                'alt_name' => 'KALIMANTAN BARAT',
                'latitude' => -0.132240,
                'longitude' => 111.096890
            ],
            [
                'name' => 'KALIMANTAN TENGAH',
                'alt_name' => 'KALIMANTAN TENGAH',
                'latitude' => -1.499580,
                'longitude' => 113.290330
            ],
            [
                'name' => 'KALIMANTAN SELATAN',
                'alt_name' => 'KALIMANTAN SELATAN',
                'latitude' => -2.943480,
                'longitude' => 115.375650
            ],
            [
                'name' => 'KALIMANTAN TIMUR',
                'alt_name' => 'KALIMANTAN TIMUR',
                'latitude' => 0.788440,
                'longitude' => 116.242000
            ],
            [
                'name' => 'KALIMANTAN UTARA',
                'alt_name' => 'KALIMANTAN UTARA',
                'latitude' => 2.725940,
                'longitude' => 116.911000
            ],
            [
                'name' => 'SULAWESI UTARA',
                'alt_name' => 'SULAWESI UTARA',
                'latitude' => 0.655570,
                'longitude' => 124.090150
            ],
            [
                'name' => 'SULAWESI TENGAH',
                'alt_name' => 'SULAWESI TENGAH',
                'latitude' => -1.693780,
                'longitude' => 120.808860
            ],
            [
                'name' => 'SULAWESI SELATAN',
                'alt_name' => 'SULAWESI SELATAN',
                'latitude' => -3.644670,
                'longitude' => 119.947190
            ],
            [
                'name' => 'SULAWESI TENGGARA',
                'alt_name' => 'SULAWESI TENGGARA',
                'latitude' => -3.549120,
                'longitude' => 121.727960
            ],
            [
                'name' => 'GORONTALO',
                'alt_name' => 'GORONTALO',
                'latitude' => 0.718620,
                'longitude' => 122.455590
            ],
            [
                'name' => 'SULAWESI BARAT',
                'alt_name' => 'SULAWESI BARAT',
                'latitude' => -2.497450,
                'longitude' => 119.391900
            ],
            [
                'name' => 'MALUKU',
                'alt_name' => 'MALUKU',
                'latitude' => -3.118840,
                'longitude' => 129.420780
            ],
            [
                'name' => 'MALUKU UTARA',
                'alt_name' => 'MALUKU UTARA',
                'latitude' => 0.630120,
                'longitude' => 127.972020
            ],
            [
                'name' => 'PAPUA BARAT',
                'alt_name' => 'PAPUA BARAT',
                'latitude' => -1.384240,
                'longitude' => 132.902530,
            ],
            [
                'name' => 'PAPUA',
                'alt_name' => 'PAPUA',
                'latitude' => -3.988570,
                'longitude' => 138.348530
            ]
        ]);
    }
}
