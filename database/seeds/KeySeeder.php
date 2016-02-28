<?php

use Illuminate\Database\Seeder;

class KeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('key_offers')->insert([
            'key' => 'tapgerine',
            'network' => '2dbd64d5827c4a43ec2629afc4b9efcf3bf861de238d1ac0761a7438ec5e6526',
            'affiliate_id' => '10033'
        ]);
    }
}
