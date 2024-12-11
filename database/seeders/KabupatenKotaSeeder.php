<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kabupaten_kotas')->insert([
            [
                'name' => 'KABUPATEN SIMEULUE',
                'alt_name' => 'KABUPATEN SIMEULUE',
                'latitude' => 2.616670,
                'longitude' => 96.083330,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH SINGKIL',
                'alt_name' => 'KABUPATEN ACEH SINGKIL',
                'latitude' => 2.416670,
                'longitude' => 97.916670,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH SELATAN',
                'alt_name' => 'KABUPATEN ACEH SELATAN',
                'latitude' => 3.166670,
                'longitude' => 97.416670,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH TENGGARA',
                'alt_name' => 'KABUPATEN ACEH TENGGARA',
                'latitude' => 3.366670,
                'longitude' => 97.700000,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH TIMUR',
                'alt_name' => 'KABUPATEN ACEH TIMUR',
                'latitude' => 4.633330,
                'longitude' => 97.633330,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH TENGAH',
                'alt_name' => 'KABUPATEN ACEH TENGAH',
                'latitude' => 4.510000,
                'longitude' => 96.855000,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH BARAT',
                'alt_name' => 'KABUPATEN ACEH BARAT',
                'latitude' => 4.450000,
                'longitude' => 96.166670,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH BESAR',
                'alt_name' => 'KABUPATEN ACEH BESAR',
                'latitude' => 5.383330,
                'longitude' => 95.516670,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN PIDIE',
                'alt_name' => 'KABUPATEN PIDIE',
                'latitude' => 5.080000,
                'longitude' => 96.10000,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN BIREUEN',
                'alt_name' => 'KABUPATEN BIREUEN',
                'latitude' => 5.083330,
                'longitude' => 96.583330,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH UTARA',
                'alt_name' => 'KABUPATEN ACEH UTARA',
                'latitude' => 4.970000,
                'longitude' => 97.140000,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH BARAT DAYA',
                'alt_name' => 'KABUPATEN ACEH BARAT DAYA',
                'latitude' => 3.833330,
                'longitude' => 96.883330,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN GAYO LUES',
                'alt_name' => 'KABUPATEN GAYO LUES',
                'latitude' => 3.950000,
                'longitude' => 97.390000,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH TAMIANG',
                'alt_name' => 'KABUPATEN ACEH TAMIANG',
                'latitude' => 4.250000,
                'longitude' => 97.966670,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN NAGAN RAYA',
                'alt_name' => 'KABUPATEN NAGAN RAYA',
                'latitude' => 4.166670,
                'longitude' => 96.516670,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN ACEH JAYA',
                'alt_name' => 'KABUPATEN ACEH JAYA',
                'latitude' => 4.860000,
                'longitude' => 95.640000,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN BENER MERIAH',
                'alt_name' => 'KABUPATEN BENER MERIAH',
                'latitude' => 4.730150,
                'longitude' => 96.861560,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KABUPATEN PIDIE JAYA',
                'alt_name' => 'KABUPATEN PIDIE JAYA',
                'latitude' => 5.150000,
                'longitude' => 96.216670,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KOTA BANDA ACEH',
                'alt_name' => 'KOTA BANDA ACEH',
                'latitude' => 5.541670,
                'longitude' => 95.333330,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KOTA SABANG',
                'alt_name' => 'KOTA SABANG',
                'latitude' => 5.821640,
                'longitude' => 95.310860,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KOTA LANGSA',
                'alt_name' => 'KOTA LANGSA',
                'latitude' => 4.470000,
                'longitude' => 97.930000,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KOTA LHOKSEUMAWE',
                'alt_name' => 'KOTA LHOKSEUMAWE',
                'latitude' => 5.133330,
                'longitude' => 97.066670,
                'provinsi_id' => 1
            ],
            [
                'name' => 'KOTA SUBULUSSALAM',
                'alt_name' => 'KOTA SUBULUSSALAM',
                'latitude' => 2.750000,
                'longitude' => 97.933330,
                'provinsi_id' => 1
            ],
            //
            [
                'name' => 'KABUPATEN NIAS',
                'alt_name' => 'KABUPATEN NIAS',
                'latitude' => 1.033330,
                'longitude' => 97.766670,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN MANDAILING NATAL',
                'alt_name' => 'KABUPATEN MANDAILING NATAL',
                'latitude' => 0.783780,
                'longitude' => 99.254950,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN TAPANULI SELATAN',
                'alt_name' => 'KABUPATEN TAPANULI SELATAN',
                'latitude' => 1.516670,
                'longitude' => 99.250000,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN TAPANULI TENGAH',
                'alt_name' => 'KABUPATEN TAPANULI TENGAH',
                'latitude' => 1.900000,
                'longitude' => 98.666670,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN TAPANULI UTARA',
                'alt_name' => 'KABUPATEN TAPANULI UTARA',
                'latitude' => 2.002800,
                'longitude' => 99.070700,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN TOBA SAMOSIR',
                'alt_name' => 'KABUPATEN TOBA SAMOSIR',
                'latitude' => 2.397930,
                'longitude' => 99.216780,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN LABUHAN BATU',
                'alt_name' => 'KABUPATEN LABUHAN BATU',
                'latitude' => 2.266670,
                'longitude' => 100.100000,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN ASAHAN',
                'alt_name' => 'KABUPATEN ASAHAN',
                'latitude' => 2.783330,
                'longitude' => 99.550000,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN SIMALUNGUN',
                'alt_name' => 'KABUPATEN SIMALUNGUN',
                'latitude' => 2.900000,
                'longitude' => 99.000000,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN DAIRI',
                'alt_name' => 'KABUPATEN DAIRI',
                'latitude' => 2.866670,
                'longitude' => 98.233330,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN KARO',
                'alt_name' => 'KABUPATEN KARO',
                'latitude' => 3.116670,
                'longitude' => 98.300000,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN DELI SERDANG',
                'alt_name' => 'KABUPATEN DELI SERDANG',
                'latitude' => 3.416670,
                'longitude' => 98.666670,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN LANGKAT',
                'alt_name' => 'KABUPATEN LANGKAT',
                'latitude' => 3.716670,
                'longitude' => 98.216670,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN NIAS SELATAN',
                'alt_name' => 'KABUPATEN NIAS SELATAN',
                'latitude' => 0.770000,
                'longitude' => 97.750000,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'alt_name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'latitude' => 2.265510,
                'longitude' => 98.503760,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN PAKPAK BHARAT',
                'alt_name' => 'KABUPATEN PAKPAK BHARAT',
                'latitude' => 2.566670,
                'longitude' => 98.283330,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN SAMOSIR',
                'alt_name' => 'KABUPATEN SAMOSIR',
                'latitude' => 2.640250,
                'longitude' => 98.715250,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN SERDANG BEDAGAI',
                'alt_name' => 'KABUPATEN SERDANG BEDAGAI',
                'latitude' => 3.366670,
                'longitude' => 99.033330,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN BATU BARA',
                'alt_name' => 'KABUPATEN BATU BARA',
                'latitude' => 3.161660,
                'longitude' => 99.526520,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
                'alt_name' => 'KABUPATEN PADANG LAWAS UTARA',
                'latitude' => 1.460110,
                'longitude' => 99.673460,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN PADANG LAWAS',
                'alt_name' => 'KABUPATEN PADANG LAWAS',
                'latitude' => 1.446840,
                'longitude' => 99.992070,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'alt_name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'latitude' => 1.983000,
                'longitude' => 100.097600,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
                'alt_name' => 'KABUPATEN LABUHAN BATU UTARA',
                'latitude' => 2.333490,
                'longitude' => 99.637760,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN NIAS UTARA',
                'alt_name' => 'KABUPATEN NIAS UTARA',
                'latitude' => 1.330370,
                'longitude' => 97.319640,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KABUPATEN NIAS BARAT',
                'alt_name' => 'KABUPATEN NIAS BARAT',
                'latitude' => 1.059660,
                'longitude' => 97.586060,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KOTA SIBOLGA',
                'alt_name' => 'KOTA SIBOLGA',
                'latitude' => 1.733330,
                'longitude' => 98.800000,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KOTA TANJUNG BALAI',
                'alt_name' => 'KOTA TANJUNG BALAI',
                'latitude' => 2.958330,
                'longitude' => 99.791670,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KOTA PEMATANG SIANTAR',
                'alt_name' => 'KOTA PEMATANG SIANTAR',
                'latitude' => 2.966670,
                'longitude' => 99.050000,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KOTA TEBING TINGGI',
                'alt_name' => 'KOTA TEBING TINGGI',
                'latitude' => 3.325000,
                'longitude' => 99.141670,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KOTA MEDAN',
                'alt_name' => 'KOTA MEDAN',
                'latitude' => 3.650000,
                'longitude' => 98.666670,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KOTA BINJAI',
                'alt_name' => 'KOTA BINJAI',
                'latitude' => 3.800000,
                'longitude' => 108.233330,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KOTA PADANG SIDEMPUAN',
                'alt_name' => 'KOTA PADANG SIDEMPUAN',
                'latitude' => 1.373750,
                'longitude' => 99.268430,
                'provinsi_id' => 2
            ],
            [
                'name' => 'KOTA GUNUNGSITOLI',
                'alt_name' => 'KOTA GUNUNGSITOLI',
                'latitude' => 1.327310,
                'longitude' => 97.550180,
                'provinsi_id' => 2
            ],
            //
            [
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'alt_name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'latitude' => 1.989170,
                'longitude' => 99.518890,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN PESISIR SELATAN',
                'alt_name' => 'KABUPATEN PESISIR SELATAN',
                'latitude' => -1.583330,
                'longitude' => 100.850000,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN SOLOK',
                'alt_name' => 'KABUPATEN SOLOK',
                'latitude' => -0.966670,
                'longitude' => 100.816670,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN SIJUNJUNG',
                'alt_name' => 'KABUPATEN SIJUNJUNG',
                'latitude' => -1.182700,
                'longitude' => 101.605600,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN TANAH DATAR',
                'alt_name' => 'KABUPATEN TANAH DATAR',
                'latitude' => -0.455500,
                'longitude' => 100.577100,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN PADANG PARIAMAN',
                'alt_name' => 'KABUPATEN PADANG PARIAMAN',
                'latitude' => -0.600000,
                'longitude' => 100.283330,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN AGAM',
                'alt_name' => 'KABUPATEN AGAM',
                'latitude' => -0.250000,
                'longitude' => 100.166670,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN LIMA PULUH KOTA',
                'alt_name' => 'KABUPATEN LIMA PULUH KOTA',
                'latitude' => -0.016800,
                'longitude' => 100.587200,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN PASAMAN',
                'alt_name' => 'KABUPATEN PASAMAN',
                'latitude' => 0.425030,
                'longitude' => 99.946060,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN SOLOK SELATAN',
                'alt_name' => 'KABUPATEN SOLOK SELATAN',
                'latitude' => -1.233330,
                'longitude' => 101.417000,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN DHARMASRAYA',
                'alt_name' => 'KABUPATEN DHARMASRAYA',
                'latitude' => -1.050000,
                'longitude' => 101.367000,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KABUPATEN PASAMAN BARAT',
                'alt_name' => 'KABUPATEN PASAMAN BARAT',
                'latitude' => 0.281520,
                'longitude' => 99.519650,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KOTA PADANG',
                'alt_name' => 'KOTA PADANG',
                'latitude' => -0.983330,
                'longitude' => 100.450000,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KOTA SOLOK',
                'alt_name' => 'KOTA SOLOK',
                'latitude' => -0.766670,
                'longitude' => 100.616670,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KOTA SAWAH LUNTO',
                'alt_name' => 'KOTA SAWAH LUNTO',
                'latitude' => -0.600000,
                'longitude' => 100.750000,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KOTA PADANG PANJANG',
                'alt_name' => 'KOTA PADANG PANJANG',
                'latitude' => -0.450000,
                'longitude' => 100.433330,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KOTA BUKITTINGGI',
                'alt_name' => 'KOTA BUKITTINGGI',
                'latitude' => -0.275000,
                'longitude' => 100.375000,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KOTA PAYAKUMBUH',
                'alt_name' => 'KOTA PAYAKUMBUH',
                'latitude' => -0.233330,
                'longitude' => 100.633330,
                'provinsi_id' => 3
            ],
            [
                'name' => 'KOTA PARIAMAN',
                'alt_name' => 'KOTA PARIAMAN',
                'latitude' => -0.626820,
                'longitude' => 100.120470,
                'provinsi_id' => 3
            ],
            //
            [
                'name' => 'KABUPATEN KUANTAN SINGINGI',
                'alt_name' => 'KABUPATEN KUANTAN SINGINGI',
                'latitude' => -0.475320,
                'longitude' => 101.458570,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN INDRAGIRI HULU',
                'alt_name' => 'KABUPATEN INDRAGIRI HULU',
                'latitude' => -0.550000,
                'longitude' => 102.316670,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN INDRAGIRI HILIR',
                'alt_name' => 'KABUPATEN INDRAGIRI HILIR',
                'latitude' => -0.333330,
                'longitude' => 103.166670,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN PELALAWAN',
                'alt_name' => 'KABUPATEN PELALAWAN',
                'latitude' => 0.208220,
                'longitude' => 102.186070,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN SIAK',
                'alt_name' => 'KABUPATEN SIAK',
                'latitude' => 0.974530,
                'longitude' => 102.013550,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN KAMPAR',
                'alt_name' => 'KABUPATEN KAMPAR',
                'latitude' => 0.234400,
                'longitude' => 101.213100,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN ROKAN HULU',
                'alt_name' => 'KABUPATEN ROKAN HULU',
                'latitude' => 0.883330,
                'longitude' => 100.483330,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN BENGKALIS',
                'alt_name' => 'KABUPATEN BENGKALIS',
                'latitude' => 0.983800,
                'longitude' => 102.509600,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN ROKAN HILIR',
                'alt_name' => 'KABUPATEN ROKAN HILIR',
                'latitude' => 2.165990,
                'longitude' => 100.825140,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
                'alt_name' => 'KABUPATEN KEPULAUAN MERANTI',
                'latitude' => 0.974880,
                'longitude' => 102.695390,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KOTA PEKANBARU',
                'alt_name' => 'KOTA PEKANBARU',
                'latitude' => 0.533330,
                'longitude' => 101.466670,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KOTA DUMAI',
                'alt_name' => 'KOTA DUMAI',
                'latitude' => 1.615920,
                'longitude' => 101.491700,
                'provinsi_id' => 4
            ],
            [
                'name' => 'KABUPATEN KERINCI',
                'alt_name' => 'KABUPATEN KERINCI',
                'latitude' => -2.033330,
                'longitude' => 101.533330,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN MERANGIN',
                'alt_name' => 'KABUPATEN MERANGIN',
                'latitude' => -2.069330,
                'longitude' => 102.133030,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN SAROLANGUN',
                'alt_name' => 'KABUPATEN SAROLANGUN',
                'latitude' => -2.300000,
                'longitude' => 102.650000,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN BATANG HARI',
                'alt_name' => 'KABUPATEN BATANG HARI',
                'latitude' => -1.750000,
                'longitude' => 103.116670,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN MUARO JAMBI',
                'alt_name' => 'KABUPATEN MUARO JAMBI',
                'latitude' => -1.552140,
                'longitude' => 103.821630,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'alt_name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'latitude' => -1.131980,
                'longitude' => 103.617550,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'alt_name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'latitude' => -1.154400,
                'longitude' => 103.244020,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN TEBO',
                'alt_name' => 'KABUPATEN TEBO',
                'latitude' => -1.455760,
                'longitude' => 102.374730,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN BUNGO',
                'alt_name' => 'KABUPATEN BUNGO',
                'latitude' => -1.502220,
                'longitude' => 101.960000,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KOTA JAMBI',
                'alt_name' => 'KOTA JAMBI',
                'latitude' => -1.616670,
                'longitude' => 103.650000,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KOTA SUNGAI PENUH',
                'alt_name' => 'KOTA SUNGAI PENUH',
                'latitude' => -2.108960,
                'longitude' => 101.321750,
                'provinsi_id' => 5
            ],
            [
                'name' => 'KABUPATEN OGAN KOMERING ULU',
                'alt_name' => 'KABUPATEN OGAN KOMERING ULU',
                'latitude' => -4.133330,
                'longitude' => 104.033330,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
                'alt_name' => 'KABUPATEN OGAN KOMERING ILIR',
                'latitude' => -3.366670,
                'longitude' => 105.366670,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN MUARA ENIM',
                'alt_name' => 'KABUPATEN MUARA ENIM',
                'latitude' => -4.232700,
                'longitude' => 103.614100,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN LAHAT',
                'alt_name' => 'KABUPATEN LAHAT',
                'latitude' => -3.786400,
                'longitude' => 103.542800,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN MUSI RAWAS',
                'alt_name' => 'KABUPATEN MUSI RAWAS',
                'latitude' => -3.083330,
                'longitude' => 103.200000,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN MUSI BANYU ASIN',
                'alt_name' => 'KABUPATEN MUSI BANYU ASIN',
                'latitude' => -2.416670,
                'longitude' => 103.750000,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN BANYU ASIN',
                'alt_name' => 'KABUPATEN BANYU ASIN',
                'latitude' => -2.883330,
                'longitude' => 104.383060,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'alt_name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'latitude' => -4.657280,
                'longitude' => 104.006590,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'alt_name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'latitude' => -3.856790,
                'longitude' => 104.752090,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN OGAN ILIR',
                'alt_name' => 'KABUPATEN OGAN ILIR',
                'latitude' => -3.431860,
                'longitude' => 104.627270,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN EMPAT LAWANG',
                'alt_name' => 'KABUPATEN EMPAT LAWANG',
                'latitude' => 3.226670,
                'longitude' => 99.092560,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'alt_name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'latitude' => -3.213420,
                'longitude' => 104.087220,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
                'alt_name' => 'KABUPATEN MUSI RAWAS UTARA',
                'latitude' => -2.485330,
                'longitude' => 103.293460,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KOTA PALEMBANG',
                'alt_name' => 'KOTA PALEMBANG',
                'latitude' => -3.000000,
                'longitude' => 104.716670,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KOTA PRABUMULIH',
                'alt_name' => 'KOTA PRABUMULIH',
                'latitude' => -3.462020,
                'longitude' => 104.222900,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KOTA PAGAR ALAM',
                'alt_name' => 'KOTA PAGAR ALAM',
                'latitude' => -4.130550,
                'longitude' => 103.268220,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KOTA LUBUK LINGGAU',
                'alt_name' => 'KOTA LUBUK LINGGAU',
                'latitude' => -3.293080,
                'longitude' => 102.855030,
                'provinsi_id' => 6
            ],
            [
                'name' => 'KABUPATEN BENGKULU SELATAN',
                'alt_name' => 'KABUPATEN BENGKULU SELATAN',
                'latitude' => -4.350000,
                'longitude' => 103.033330,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN REJANG LEBONG',
                'alt_name' => 'KABUPATEN REJANG LEBONG',
                'latitude' => -3.433330,
                'longitude' => 102.716670,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN BENGKULU UTARA',
                'alt_name' => 'KABUPATEN BENGKULU UTARA',
                'latitude' => -3.333330,
                'longitude' => 102.050000,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN KAUR',
                'alt_name' => 'KABUPATEN KAUR',
                'latitude' => -4.781790,
                'longitude' => 103.361090,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN SELUMA',
                'alt_name' => 'KABUPATEN SELUMA',
                'latitude' => -3.966440,
                'longitude' => 102.474290,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN MUKOMUKO',
                'alt_name' => 'KABUPATEN MUKOMUKO',
                'latitude' => -3.074380,
                'longitude' => 101.547660,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN LEBONG',
                'alt_name' => 'KABUPATEN LEBONG',
                'latitude' => -3.242780,
                'longitude' => 102.334900,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN KEPAHIANG',
                'alt_name' => 'KABUPATEN KEPAHIANG',
                'latitude' => -3.601940,
                'longitude' => 102.564240,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN BENGKULU TENGAH',
                'alt_name' => 'KABUPATEN BENGKULU TENGAH',
                'latitude' => -3.206790,
                'longitude' => 102.126160,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KOTA BENGKULU',
                'alt_name' => 'KOTA BENGKULU',
                'latitude' => -3.816670,
                'longitude' => 102.316670,
                'provinsi_id' => 7
            ],
            [
                'name' => 'KABUPATEN LAMPUNG BARAT',
                'alt_name' => 'KABUPATEN LAMPUNG BARAT',
                'latitude' => -5.116670,
                'longitude' => 104.100000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN TANGGAMUS',
                'alt_name' => 'KABUPATEN TANGGAMUS',
                'latitude' => -5.383330,
                'longitude' => 104.750000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN LAMPUNG SELATAN',
                'alt_name' => 'KABUPATEN LAMPUNG SELATAN',
                'latitude' => -5.416670,
                'longitude' => 105.250000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN LAMPUNG TIMUR',
                'alt_name' => 'KABUPATEN LAMPUNG TIMUR',
                'latitude' => -5.333330,
                'longitude' => 105.750000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN LAMPUNG TENGAH',
                'alt_name' => 'KABUPATEN LAMPUNG TENGAH',
                'latitude' => -4.950000,
                'longitude' => 105.500000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN LAMPUNG UTARA',
                'alt_name' => 'KABUPATEN LAMPUNG UTARA',
                'latitude' => -4.833330,
                'longitude' => 105.966670,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN WAY KANAN',
                'alt_name' => 'KABUPATEN WAY KANAN',
                'latitude' => -4.666670,
                'longitude' => 104.750000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN TULANGBAWANG',
                'alt_name' => 'KABUPATEN TULANGBAWANG',
                'latitude' => -4.416670,
                'longitude' => 105.250000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN TULANGBAWANG BARAT',
                'alt_name' => 'KABUPATEN TULANGBAWANG BARAT',
                'latitude' => -4.416670,
                'longitude' => 104.750000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN MESUJI',
                'alt_name' => 'KABUPATEN MESUJI',
                'latitude' => -4.000000,
                'longitude' => 105.500000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN PESISIR BARAT',
                'alt_name' => 'KABUPATEN PESISIR BARAT',
                'latitude' => -5.416670,
                'longitude' => 104.083330,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN PRINGSEWU',
                'alt_name' => 'KABUPATEN PRINGSEWU',
                'latitude' => -5.358330,
                'longitude' => 104.974440,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN TANGGAMUS',
                'alt_name' => 'KABUPATEN TANGGAMUS',
                'latitude' => -5.383330,
                'longitude' => 104.750000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN BANDAR LAMPUNG',
                'alt_name' => 'KABUPATEN BANDAR LAMPUNG',
                'latitude' => -5.416670,
                'longitude' => 105.250000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KOTA BANDAR LAMPUNG',
                'alt_name' => 'KOTA BANDAR LAMPUNG',
                'latitude' => -5.416670,
                'longitude' => 105.250000,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KOTA METRO',
                'alt_name' => 'KOTA METRO',
                'latitude' => -5.113060,
                'longitude' => 105.306670,
                'provinsi_id' => 8
            ],
            [
                'name' => 'KABUPATEN BANGKA',
                'alt_name' => 'KABUPATEN BANGKA',
                'latitude' => -2.000000,
                'longitude' => 106.000000,
                'provinsi_id' => 9
            ],
            [
                'name' => 'KABUPATEN BELITUNG',
                'alt_name' => 'KABUPATEN BELITUNG',
                'latitude' => -2.833330,
                'longitude' => 107.500000,
                'provinsi_id' => 9
            ],
            [
                'name' => 'KABUPATEN BANGKA BARAT',
                'alt_name' => 'KABUPATEN BANGKA BARAT',
                'latitude' => -2.000000,
                'longitude' => 105.500000,
                'provinsi_id' => 9
            ],
            [
                'name' => 'KABUPATEN BANGKA TENGAH',
                'alt_name' => 'KABUPATEN BANGKA TENGAH',
                'latitude' => -2.000000,
                'longitude' => 106.500000,
                'provinsi_id' => 9
            ],
            [
                'name' => 'KABUPATEN BANGKA SELATAN',
                'alt_name' => 'KABUPATEN BANGKA SELATAN',
                'latitude' => -2.000000,
                'longitude' => 106.000000,
                'provinsi_id' => 9
            ],
            [
                'name' => 'KABUPATEN BELITUNG TIMUR',
                'alt_name' => 'KABUPATEN BELITUNG TIMUR',
                'latitude' => -2.833330,
                'longitude' => 107.500000,
                'provinsi_id' => 9
            ],
            [
                'name' => 'KOTA PANGKAL PINANG',
                'alt_name' => 'KOTA PANGKAL PINANG',
                'latitude' => -2.133330,
                'longitude' => 106.133330,
                'provinsi_id' => 9
            ],
            [
                'name' => 'KABUPATEN KARIMUN',
                'alt_name' => 'KABUPATEN KARIMUN',
                'latitude' => 0.900000,
                'longitude' => 103.500000,
                'provinsi_id' => 10
            ],
            [
                'name' => 'KABUPATEN BINTAN',
                'alt_name' => 'KABUPATEN BINTAN',
                'latitude' => 1.083330,
                'longitude' => 104.033330,
                'provinsi_id' => 10
            ],
            [
                'name' => 'KABUPATEN NATUNA',
                'alt_name' => 'KABUPATEN NATUNA',
                'latitude' => 3.900000,
                'longitude' => 108.500000,
                'provinsi_id' => 10
            ],
            [
                'name' => 'KABUPATEN LINGGA',
                'alt_name' => 'KABUPATEN LINGGA',
                'latitude' => 0.000000,
                'longitude' => 0.000000,
                'provinsi_id' => 10
            ],
            [
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'alt_name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'latitude' => 3.000000,
                'longitude' => 105.833330,
                'provinsi_id' => 10
            ],
            [
                'name' => 'KOTA BATAM',
                'alt_name' => 'KOTA BATAM',
                'latitude' => 1.133330,
                'longitude' => 104.033330,
                'provinsi_id' => 10
            ],
            [
                'name' => 'KOTA TANJUNG PINANG',
                'alt_name' => 'KOTA TANJUNG PINANG',
                'latitude' => 0.916670,
                'longitude' => 104.450000,
                'provinsi_id' => 10
            ],
            [
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
                'alt_name' => 'KABUPATEN KEPULAUAN SERIBU',
                'latitude' => -5.500000,
                'longitude' => 106.500000,
                'provinsi_id' => 11
            ],
            [
                'name' => 'KOTA JAKARTA SELATAN',
                'alt_name' => 'KOTA JAKARTA SELATAN',
                'latitude' => -6.266670,
                'longitude' => 106.783330,
                'provinsi_id' => 11
            ],
            [
                'name' => 'KOTA JAKARTA TIMUR',
                'alt_name' => 'KOTA JAKARTA TIMUR',
                'latitude' => -6.266670,
                'longitude' => 106.883330,
                'provinsi_id' => 11
            ],
            [
                'name' => 'KOTA JAKARTA PUSAT',
                'alt_name' => 'KOTA JAKARTA PUSAT',
                'latitude' => -6.174444,
                'longitude' => 106.829444,
                'provinsi_id' => 11
            ],
            [
                'name' => 'KOTA JAKARTA BARAT',
                'alt_name' => 'KOTA JAKARTA BARAT',
                'latitude' => -6.166670,
                'longitude' => 106.783330,
                'provinsi_id' => 11
            ],
            [
                'name' => 'KOTA JAKARTA UTARA',
                'alt_name' => 'KOTA JAKARTA UTARA',
                'latitude' => -6.133330,
                'longitude' => 106.900000,
                'provinsi_id' => 11
            ],
            [
                'name' => 'KOTA JAKARTA TIMUR',
                'alt_name' => 'KOTA JAKARTA TIMUR',
                'latitude' => -6.266670,
                'longitude' => 106.883330,
                'provinsi_id' => 11
            ],
            [
                'name' => 'KABUPATEN BOGOR',
                'alt_name' => 'KABUPATEN BOGOR',
                'latitude' => -6.600000,
                'longitude' => 106.800000,
                'provinsi_id' => 12
            ],
        ]);
    }
}
