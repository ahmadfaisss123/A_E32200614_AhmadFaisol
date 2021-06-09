<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table ('detail_profile')->insert([
            'address' => 'Probolinggo',
            'nomor_tlp' => '08xxxxxxxxxxx',
            'ttl' => '2001-06-21',
            'foto' =>'picture.png',
        ]);
    }
}
