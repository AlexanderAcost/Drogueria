<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $proveedores=[
            //[
              //  'NombreComoEstaEnLaTabla'=>'ValorQueQuieroAsignar'
            // ],
            ['title'=>'Adios',
             'year'=>'2020',
             'director'=>'juan',   
             'poster'=>'adios.jpg',
             'synopsis'=>'Pelicula drama'
            ],
            ['title'=> 'Marvel',
             'year'=>'2019',
             'director'=> 'alex',
             'poster'=> 'marvel.jpg',
             'synopsis'=> 'pelicula accion'
            ],
            ['title'=> 'quito',
             'year'=>'2018',
             'director'=> 'perez',
             'poster'=> 'quito.jpg',
             'synopsis'=> 'pelicula belica'
            ]
           
        ];
        DB::table('movies')->insert($movies);


    }
}
