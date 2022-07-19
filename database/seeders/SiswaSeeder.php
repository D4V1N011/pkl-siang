<?php

//use Illuminate\Database\Seeder;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
        ['nama' => 'Abdul','nis'=>'202202301','jk'=>'L',
            'tgl_lahir' => '1998-08-15','alamat'=>'Bandung',
        ],
        ['nama' => 'Silvanna','nis'=>'202202302','jk'=>'P',
            'tgl_lahir' => '1999-11-03','alamat'=>'Jakarta',
        ],
      ];
      foreach ($sample as $value) {
        DB::table('siswas')->insert([
            'nama' => $value['nama'],
            'nis' => $value['nis'],
            'tgl_lahir' => $value['tgl_lahir'],
            'alamat' => $value['alamat'],
            'jk' => $value['jk'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
      }

      
    }
}
