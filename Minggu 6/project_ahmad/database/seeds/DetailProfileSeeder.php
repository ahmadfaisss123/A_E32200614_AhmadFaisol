<?php

use Illuminate\Database\Seeder;

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
        DB::table('detail_profile')->insert([
            'address' => 'Probolinggo',
            'nomor_tlp' => '085156361165',
            'ttl' => '2001-06-21',
            'foto' => 'picture.png'
        ]);
    }
}
