<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            [
                'id_kode' => 'xx1',
                'jenis' => 'iphone 12'
            ],
            [
                'id_kode' => 'xx3',
                'jenis' => 'iphone 13'
            ],
            [
                'id_kode' => 'xx4',
                'jenis' => 'iphone 14'
            ]

        ]);
    }
}
