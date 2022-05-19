<?php

use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('municipios')->count() == 0){
            DB::table('municipios')->insert([
                [
                    'municipio' => 'Aguascalientes',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'Asientos',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'Calvillo',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'Costo',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'Jésus María',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'Pabellón de Arteaga',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'Rincón de Romos',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'San Francisco de los Romo',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'Tepezalá',
                    'estado_id' => 1
                ],
                [
                    'municipio' => 'Ensenada',
                    'estado_id' => 2
                ],
                [
                    'municipio' => 'Mexicali',
                    'estado_id' => 2
                ],
                [
                    'municipio' => 'Playas de Rosarito',
                    'estado_id' => 2
                ],
                [
                    'municipio' => 'Rodolfo Sánchez Taboada (Maneadero)',
                    'estado_id' => 2
                ],
                [
                    'municipio' => 'San Felipe',
                    'estado_id' => 2
                ],
                [
                    'municipio' => 'Tecate',
                    'estado_id' => 2
                ],
                [
                    'municipio' => 'Tijuana',
                    'estado_id' => 2
                ],
                [
                    'municipio' => 'Cabo San Lucas',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Ciudad Constitución',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Guerrero Negro',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Heroica Mulegé',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'La Paz',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Loreto',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Puerto Adolfo López Mateos',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'San Ignacio',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'San José del Cabo',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Santa Rosalía',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Todos Santos',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Villa Alberto Andrés Alvarado Arámburo',
                    'estado_id' => 3
                ],
                [
                    'municipio' => 'Campeche',
                    'estado_id' => 4
                ],
                [
                    'municipio' => 'Saltillo',
                    'estado_id' => 5
                ],
                [
                    'municipio' => 'Allende',
                    'estado_id' => 5
                ],
                [
                    'municipio' => 'Arteaga',
                    'estado_id' => 5
                ],
                [
                    'municipio' => 'Castaños',
                    'estado_id' => 5
                ],
                [
                    'municipio' => 'Ciudad Acuña',
                    'estado_id' => 5
                ],
                [
                    'municipio' => 'Colima',
                    'estado_id' => 6
                ],
                [
                    'municipio' => 'Ciudad de Armería',
                    'estado_id' => 6
                ],
                [
                    'municipio' => 'Ciudad de Villa de Álvarez',
                    'estado_id' => 6
                ],
                [
                    'municipio' => 'Manzanillo',
                    'estado_id' => 6
                ],
                [
                    'municipio' => 'Tecomán',
                    'estado_id' => 6
                ],
                [
                    'municipio' => 'Acala',
                    'estado_id' => 7
                ],
                [
                    'municipio' => 'Arriaga',
                    'estado_id' => 7
                ],
                [
                    'municipio' => 'Cacahoatán',
                    'estado_id' => 7
                ],
                [
                    'municipio' => 'Chiapa de Corzo',
                    'estado_id' => 7
                ],
                [
                    'municipio' => 'Cintalapa de Figueroa',
                    'estado_id' => 7
                ],
                [
                    'municipio' => 'Bachíniva',
                    'estado_id' => 8
                ],
                [
                    'municipio' => 'Chihuahua',
                    'estado_id' => 8
                ],
                [
                    'municipio' => 'Colonia Anáhuac',
                    'estado_id' => 8
                ],
                [
                    'municipio' => 'Cuauhtémoc',
                    'estado_id' => 8
                ],
                [
                    'municipio' => '',
                    'estado_id' => 1
                ]
            ]);
        }
    }
}
