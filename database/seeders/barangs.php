<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama' => 'IPHONE 12 PRO MAX',
                'code_jenis' => 'xx1',
                'deskripsi_view' => 'RAM 8GB, Storage 128GB',
                'desskripsi_detail' => 'Layar iPhone 12 memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur sebagai persegi standar, layarnya berukuran 6,06 inci secara diagonal (area bidang layar berukuran lebih kecil). ',
                'stock' => 100,
                'foto' => 'iphone 12.png',
                'harga' => 17000000
            ],
            [
                'nama' => 'IPHONE 13 PRO MAX',
                'code_jenis' => 'xx3',
                'deskripsi_view' => 'RAM 8GB, Storage 128GB',
                'desskripsi_detail' => 'Layar iPhone 13 Pro Max memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur sebagai bentuk persegi standar, layarnya berukuran 6,68 inci secara diagonal (area bidang layar berukuran lebih kecil).',
                'stock' => 200,
                'foto' => 'iphone 13.png',
                'harga' => 23000000
            ],
            [
                'nama' => 'IPHONE 14 PRO MAX',
                'code_jenis' => 'xx4',
                'deskripsi_view' => 'RAM 16GB, Storage 128GB',
                'desskripsi_detail' => 'Layar iPhone 14 Pro Max memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur sebagai bentuk persegi standar, layarnya berukuran 6,69 inci secara diagonal (area bidang layar berukuran lebih kecil).',
                'stock' => 100,
                'foto' => 'iphone 14.png',
                'harga' => 200000
            ],
            
        ]);
    }
}
