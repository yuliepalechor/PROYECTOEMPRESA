<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class Empresa_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Empresa')->insert([
            'nombre'=>'VBNMM',
            'direccion'=>'llllll',
            'telefono'=>'222222',
            'correo'=>'vvvv@gmail.com',
        ]);

        
           
    }
}
