<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('estados')->count() == 0){
            DB::table('estados')->insert([
                [
                    'estado' => 'Aguascalientes'
                ],
                [
                    'estado' => 'Baja California'
                ],
                [
                    'estado' => 'Baja California Sur'
                ],
                [
                    'estado' => 'Campeche'
                ],
                [
                    'estado' => 'Coahuila de Zaragoza'
                ],
                [
                    'estado' => 'Colima'
                ],
                [
                    'estado' => 'Chiapas'
                ],
                [
                    'estado' => 'Chihuahua'
                ],
                [
                    'estado' => 'Ciudad de México'
                ],
                [
                    'estado' => 'Durango'
                ],
                [
                    'estado' => 'Guanajuato'
                ],
                [
                    'estado' => 'Guerrero'
                ],
                [
                    'estado' => 'Hidalgo'
                ],
                [
                    'estado' => 'Guadalajara'
                ],
                [
                    'estado' => 'México'
                ],
                [
                    'estado' => 'Michoacán de Ocampo'
                ],
                [
                    'estado' => 'Morelos'
                ],
                [
                    'estado' => 'Nayarit'
                ],
                [
                    'estado' => 'Nuevo León'
                ],
                [
                    'estado' => 'Oaxaca'
                ],
                [
                    'estado' => 'Puebla'
                ],
                [
                    'estado' => 'Querétaro'
                ],
                [
                    'estado' => 'Quintana Roo'
                ],
                [
                    'estado' => 'San Luis Potosí'
                ],
                [
                    'estado' => 'Sinaloa'
                ],
                [
                    'estado' => 'Sonora'
                ],
                [
                    'estado' => 'Tabasco'
                ],
                [
                    'estado' => 'Tamaulipas'
                ],
                [
                    'estado' => 'Tlaxcala'
                ],
                [
                    'estado' => 'Veracruz de Ignacio de la Llave'
                ],
                [
                    'estado' => 'Yucatán'
                ],
                [
                    'estado' => 'Zacatecas'
                ]
            ]);
        }
    }
}
