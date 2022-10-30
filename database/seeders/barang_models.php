<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barang_models extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('barang_models')->insert([
            [
                    "kode_barang" => "E1",
                    "nama_barang" => "Emina Brigth Stuff Moisturizing Cream",
                    "detail" => "mencerahkan dan melembabkan wajah, pelembab yang mengandung Ekstrak Summer Plum dan Vitamin E ini juga diperkaya dengan UVA dan UVB filter yang juga melindungi kulit wajah dari sinar matahari. ",
                    "harga" => 23000,
                    "stock" => 23,
                    "foto" => "2.jpg"
            ],

            [
                    "kode_barang" => "E2",
                    "nama_barang" => "EMINA Brigth Stuff Acne Prone Skin Face Wash",
                    "detail" => "melembabkan dan menghindarkan dari dehidrasi kulit wajah.",
                    "harga" => 27000,
                    "stock" => 12,
                    "foto" => "1.jpg"
            ],

            [
                "kode_barang" => "E3",
                "nama_barang" => "Emina Brigth Stuff Face Serum",
                "detail" => "Membantu mencerahkan dan mengurangi tampilan noda hitam. Serta melindungi kulit dari polusi debu dan kotoran.",
                "harga" => 50000,
                "stock" => 18,
                "foto" => "3.jpg"
            ],

            [
                "kode_barang" => "E4",
                "nama_barang" => "Emina Brigth Stuff Face Toner",
                "detail" => "Membantu mencerahkan dan mengurangi tampilan noda hitam. Serta melindungi kulit dari polusi debu dan kotoran.",
                "harga" => 24000,
                "stock" => 18,
                "foto" => "4.jpg"
            ],
        ]);
    }
}
