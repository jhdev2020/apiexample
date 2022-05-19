<?php

use Illuminate\Database\Seeder;

class ColoniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('colonias')->count() == 0){
            DB::table('colonias')->insert([
                [
                    'd_asenta' => 'Aguascalientes Centro',
                    'd_codigo' => 20000,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Colinas del Rio',
                    'd_codigo' => 20010,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Olivares Santana',
                    'd_codigo' => 20010,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Brisas',
                    'd_codigo' => 20010,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Ramon Romo Franco',
                    'd_codigo' => 20010,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San Cayetano',
                    'd_codigo' => 20010,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Colinas de San Ignacio',
                    'd_codigo' => 20016,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Fundición',
                    'd_codigo' => 20016,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Fundición II',
                    'd_codigo' => 20016,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Sauces',
                    'd_codigo' => 20016,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Línea de Fuego',
                    'd_codigo' => 20018,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Buenos Aires',
                    'd_codigo' => 20020,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Circunvalación Norte',
                    'd_codigo' =>  20020,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Arboledas',
                    'd_codigo' =>  20020,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas de San Francisco',
                    'd_codigo' =>  20020,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas de La Universidad',
                    'd_codigo' =>  20029,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'El Sol',
                    'd_codigo' =>  20030,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Gremial',
                    'd_codigo' =>  20030,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Industrial',
                    'd_codigo' =>  20030,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Altavista',
                    'd_codigo' =>  20040,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Curtidores',
                    'd_codigo' =>  20040,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Concordia',
                    'd_codigo' =>  20040,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Miravalle',
                    'd_codigo' =>  20040,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Panorama',
                    'd_codigo' =>  20040,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial Guadalupe',
                    'd_codigo' =>  20040,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Colinas del Poniente',
                    'd_codigo' =>  20049,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Bugambilias',
                    'd_codigo' =>  20050,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Del Carmen',
                    'd_codigo' =>  20050,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Fe',
                    'd_codigo' =>  20050,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'México',
                    'd_codigo' =>  20050,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Primavera',
                    'd_codigo' =>  20050,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San Pablo',
                    'd_codigo' =>  20050,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Guadalupe',
                    'd_codigo' =>  20059,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Heliodoro Garcia',
                    'd_codigo' =>  20059,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Gómez',
                    'd_codigo' =>  20060,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Moderno',
                    'd_codigo' =>  20060,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Valle del Rio San Pedro',
                    'd_codigo' =>  20064,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Guadalupe Posada',
                    'd_codigo' =>  20070,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San Marcos Colonia',
                    'd_codigo' =>  20070,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San Marcos Barrio',
                    'd_codigo' =>  20070,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San Marcos Fraccionamiento',
                    'd_codigo' =>  20078,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Modelo',
                    'd_codigo' =>  20080,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial del Valle I',
                    'd_codigo' =>  20080,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial del Valle II',
                    'd_codigo' =>  20089,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Herradura',
                    'd_codigo' =>  20100,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Club Campestre',
                    'd_codigo' =>  20100,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Jardines del Campestre',
                    'd_codigo' =>  20100,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Vergeles',
                    'd_codigo' =>  20100,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Ciudad Universitaria',
                    'd_codigo' =>  20100,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Rancho San Antonio',
                    'd_codigo' =>  20100,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Talamantes Ponce',
                    'd_codigo' =>  20110,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Granjas del Campestre',
                    'd_codigo' =>  20110,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Puerto las Hadas',
                    'd_codigo' =>  20110,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Valle del Campestre',
                    'd_codigo' =>  20110,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas de Montenegro',
                    'd_codigo' =>  20110,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Cavas',
                    'd_codigo' =>  20110,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Enramada',
                    'd_codigo' =>  20110,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Trojes de Oriente',
                    'd_codigo' =>  20115,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Valle de las Trojes',
                    'd_codigo' =>  20115,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas de San Nicolás',
                    'd_codigo' =>  20115,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San Telmo',
                    'd_codigo' =>  20115,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Paloma',
                    'd_codigo' =>  20115,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Barrio de Santiago',
                    'd_codigo' =>  20115,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa de las Trojes',
                    'd_codigo' =>  20115,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Valle de Santa Teresa',
                    'd_codigo' =>  20115,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Troje',
                    'd_codigo' =>  20116,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Trojes de Alonso',
                    'd_codigo' =>  20116,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San Telmo Residencial',
                    'd_codigo' =>  20116,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Santa Fe',
                    'd_codigo' =>  20116,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Aguascalientes 2000',
                    'd_codigo' =>  20117,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Trojes',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Misión del Campanario',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Trojes de Cristal',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Trojes del Sol',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial Santa Clara',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Misión de Santiago',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Andora Residencial',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Cadaqués Residencial',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Valle del Campanario',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Misiones',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Jarales',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Cerrada El Molino',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Valle Real',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Terzetto',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Cerrada de La Misión',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Cerrada del Valle',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Cerrada de la Mezquitera',
                    'd_codigo' =>  20118,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Lomas del Campestre 2a Sección',
                    'd_codigo' =>  20119,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas del Campestre',
                    'd_codigo' =>  20119,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Calicantos',
                    'd_codigo' =>  20119,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Jardines de la Concepción',
                    'd_codigo' =>  20120,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Bosques',
                    'd_codigo' =>  20120,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Perla Norte',
                    'd_codigo' =>  20120,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Arroyo El Molino',
                    'd_codigo' =>  20123,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Galerías',
                    'd_codigo' =>  20123,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial Altaria',
                    'd_codigo' =>  20124,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Constitución',
                    'd_codigo' =>  20124,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Libertad',
                    'd_codigo' =>  20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Pozo Bravo Norte',
                    'd_codigo' =>  20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Soberana Convención Revolucionaria',
                    'd_codigo' =>  20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa Montaña',
                    'd_codigo' =>  20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas de Don Antonio',
                    'd_codigo' =>  20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Ángeles',
                    'd_codigo' =>  20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Capittala',
                    'd_codigo' =>  20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Recinto de la Macarena',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Soledad',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Naranjos',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa de Nuestra Señora de La Asunción Sector Guadalupe',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa Teresa',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Cartagena 1947',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas de La Convención',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Lomas de La Asunción',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa de Nuestra Señora de La Asunción Sector Encino',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa de Nuestra Señora de La Asunción Sector Alameda',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San José de Pozo Bravo',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa de Nuestra Señora de La Asunción Sector San Marcos',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa de Nuestra Señora de La Asunción Sector Estación',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Plazas',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'El Rosedal',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Natura',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Montebello Della Stanza',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa Notre Dame',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Privada Guadalupe',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Rinconada Pozo Bravo',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Pozo Bravo Sur',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa Loma Dorada',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Jardines de Montebello',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas del Río',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'El Puertecito',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Rinconada del Puertecito',
                    'd_codigo' => 20126,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Bosques del Prado Norte',
                    'd_codigo' => 20127,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Sartenejo',
                    'd_codigo' => 20128,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Lomas del Campestre 1a Sección',
                    'd_codigo' => 20129,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Bosques del Prado Sur',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'El Roble',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Fátima',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Independencia de México',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Nueva Rinconada',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Primo Verdad',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San José del Arenal',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Unidad Ganadera',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'San Xavier',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial del Real',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Puerta Navarra',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial Campestre Club de Golf',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Palma Real',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Muralia',
                    'd_codigo' => 20130,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Agropecuario',
                    'd_codigo' => 20135,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Centro Distribuidor de Básicos',
                    'd_codigo' => 20135,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Rinconada',
                    'd_codigo' => 20136,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'El Plateado',
                    'd_codigo' => 20137,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial Pulgas Pandas Norte',
                    'd_codigo' => 20138,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Residencial Pulgas Pandas Sur',
                    'd_codigo' => 20138,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas del Vergel',
                    'd_codigo' => 20138,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Cerrada San Miguel',
                    'd_codigo' => 20138,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Hadas',
                    'd_codigo' => 20140,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Morelos',
                    'd_codigo' => 20140,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Andrea',
                    'd_codigo' => 20140,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Arcos',
                    'd_codigo' => 20146,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Industrial',
                    'd_codigo' => 20149,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Buenavista',
                    'd_codigo' => 20150,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'C.T.M.',
                    'd_codigo' => 20150,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Estrella',
                    'd_codigo' => 20150,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Macias Arellano',
                    'd_codigo' => 20150,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Trento',
                    'd_codigo' => 20150,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Nueva Andalucia Coto Residencial',
                    'd_codigo' => 20150,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Lomas del Cobano',
                    'd_codigo' => 20150,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Higuerilla',
                    'd_codigo' => 20157,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Parras',
                    'd_codigo' => 20157,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'El Cobano',
                    'd_codigo' => 20158,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Hacienda el Cobano',
                    'd_codigo' => 20158,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Trojes del Cobano',
                    'd_codigo' => 20158,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villas del Cobano',
                    'd_codigo' => 20158,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Alianza Ferrocarrilera',
                    'd_codigo' => 20159,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Bosques del Prado Oriente',
                    'd_codigo' => 20159,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Francisco Guel Jimenez',
                    'd_codigo' => 20160,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Viñas INFONAVIT',
                    'd_codigo' => 20160,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Santa Anita 4a Sección',
                    'd_codigo' => 20164,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Santa Anita',
                    'd_codigo' => 20164,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Santa Anita 2a Sección',
                    'd_codigo' => 20169,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Las Cumbres',
                    'd_codigo' => 20169,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Lic Benito Juárez',
                    'd_codigo' => 20170,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Nazario Ortiz Garza',
                    'd_codigo' => 20170,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Rodolfo Landeros Gallegos',
                    'd_codigo' => 20170,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'S.T.E.M.A.',
                    'd_codigo' => 20170,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Zona Militar',
                    'd_codigo' => 20170,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Villa Bonita',
                    'd_codigo' => 20170,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Lic Benito Palomino Dena',
                    'd_codigo' => 20172,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Anexo Benito Palomino Dena (Cumbres II)',
                    'd_codigo' => 20172,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Florida l',
                    'd_codigo' => 20172,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'La Florida ll',
                    'd_codigo' => 20172,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Claustros Loma Dorada',
                    'd_codigo' => 20172,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Cumbres III',
                    'd_codigo' => 20172,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Lomas de Bellavista',
                    'd_codigo' => 20174,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Lomas de las Fuentes',
                    'd_codigo' => 20174,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Colinas de Oriente',
                    'd_codigo' => 20174,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Vista de las Cumbres',
                    'd_codigo' => 20174,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Los Laureles',
                    'd_codigo' => 20174,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Mirador de las Culturas',
                    'd_codigo' => 20174,
                    'municipio_id' => 1
                ],
                [
                    'd_asenta' => 'Asientos Centro',
                    'd_codigo' => 20710,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'Santa Cruz',
                    'd_codigo' => 20710,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'De Peñitas',
                    'd_codigo' => 20712,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'Los Tepetates',
                    'd_codigo' => 20713,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'Del CECYTE',
                    'd_codigo' => 20713,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'De Guadalupe',
                    'd_codigo' => 20714,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'INFONAVIT',
                    'd_codigo' => 20715,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'Del Tepozán',
                    'd_codigo' => 20715,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'Juventud',
                    'd_codigo' => 20715,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'Real Minero',
                    'd_codigo' => 20717,
                    'municipio_id' => 2
                ],
                [
                    'd_asenta' => 'Calvillo Centro',
                    'd_codigo' => 20800,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'El Mirador',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'Independencia',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'López Mateos',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'Las Paseras',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'Vista Hermosa',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'Campo Militar 14 CINE',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'El Guayabo',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'Sección Benito Juárez',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'Sección Cerritos',
                    'd_codigo' => 20802,
                    'municipio_id' => 3
                ],
                [
                    'd_asenta' => 'Cosío Centro',
                    'd_codigo' => 20460,
                    'municipio_id' => 4
                ],
                [
                    'd_asenta' => 'Luis Donaldo Colosio',
                    'd_codigo' => 20462,
                    'municipio_id' => 4
                ],
                [
                    'd_asenta' => 'Villas del Potrerito',
                    'd_codigo' => 20466,
                    'municipio_id' => 4
                ],
                [
                    'd_asenta' => 'Popular',
                    'd_codigo' => 20467,
                    'municipio_id' => 4
                ],
                [
                    'd_asenta' => 'Santa Cruz',
                    'd_codigo' => 20468,
                    'municipio_id' => 4
                ],
                [
                    'd_asenta' => 'Mexiquito',
                    'd_codigo' => 20469,
                    'municipio_id' => 4
                ],
                [
                    'd_asenta' => 'Coplamar',
                    'd_codigo' => 20469,
                    'municipio_id' => 4
                ],
                [
                    'd_asenta' => 'Vista Hermosa',
                    'd_codigo' => 20469,
                    'municipio_id' => 4
                ],
                [
                    'd_asenta' => 'Jesús María Centro',
                    'd_codigo' => 20920,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'Bellavista',
                    'd_codigo' => 20922,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'La Troje',
                    'd_codigo' => 20922,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'El Calvario',
                    'd_codigo' => 20922,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'La Escalera',
                    'd_codigo' => 20922,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'Rinconada Jesús María',
                    'd_codigo' => 20923,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'Real Campestre',
                    'd_codigo' => 20923,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'La Villa Residencial',
                    'd_codigo' => 20923,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'Los Álamos',
                    'd_codigo' => 20923,
                    'municipio_id' => 5
                ],
                [
                    'd_asenta' => 'Pabellón de Arteaga Centro',
                    'd_codigo' => 20670,
                    'municipio_id' => 6
                ],
                [
                    'd_asenta' => 'FOVISSSTE',
                    'd_codigo' => 20673,
                    'municipio_id' => 6
                ],
                [
                    'd_asenta' => 'Jardines de Pabellón',
                    'd_codigo' => 20673,
                    'municipio_id' => 6
                ],
                [
                    'd_asenta' => 'Subdivisión Haciendas de Pabellón',
                    'd_codigo' => 20673,
                    'municipio_id' => 6
                ],
                [
                    'd_asenta' => 'Barrio Industrial',
                    'd_codigo' => 20673,
                    'municipio_id' => 6
                ],
                [
                    'd_asenta' => 'Rincón de Romos Centro',
                    'd_codigo' => 20400,
                    'municipio_id' => 7
                ],
                [
                    'd_asenta' => 'Norte',
                    'd_codigo' => 20403,
                    'municipio_id' => 7
                ],
                [
                    'd_asenta' => 'Santa Elena',
                    'd_codigo' => 20403,
                    'municipio_id' => 7
                ],
                [
                    'd_asenta' => 'Desarrollo Especial La Pedrera',
                    'd_codigo' => 20403,
                    'municipio_id' => 7
                ],
                [
                    'd_asenta' => 'Subdivisión La Piedrera',
                    'd_codigo' => 20403,
                    'municipio_id' => 7
                ],
                [
                    'd_asenta' => 'Panamericano',
                    'd_codigo' => 20300,
                    'municipio_id' => 8
                ],
                [
                    'd_asenta' => 'San Francisco de los Romos Centro',
                    'd_codigo' => 20300,
                    'municipio_id' => 8
                ],
                [
                    'd_asenta' => 'El Tirón (El Progreso)',
                    'd_codigo' => 20303,
                    'municipio_id' => 8
                ],
                [
                    'd_asenta' => 'Hidalgo',
                    'd_codigo' => 20303,
                    'municipio_id' => 8
                ],
                [
                    'd_asenta' => 'La Aurora',
                    'd_codigo' => 20303,
                    'municipio_id' => 8
                ],
                [
                    'd_asenta' => 'Tepezalá Centro',
                    'd_codigo' => 20600,
                    'municipio_id' => 9
                ],
                [
                    'd_asenta' => 'Cholula',
                    'd_codigo' => 20602,
                    'municipio_id' => 9
                ],
                [
                    'd_asenta' => 'San Rafael',
                    'd_codigo' => 20603,
                    'municipio_id' => 9
                ],
                [
                    'd_asenta' => 'Felipe González González',
                    'd_codigo' => 20604,
                    'municipio_id' => 9
                ],
                [
                    'd_asenta' => 'Del Socorro',
                    'd_codigo' => 20607,
                    'municipio_id' => 9
                ],
                [
                    'd_asenta' => 'Luis Ortega Douglas',
                    'd_codigo' => 20607,
                    'municipio_id' => 9
                ],
                [
                    'd_asenta' => 'Sección Primera',
                    'd_codigo' => 22800,
                    'municipio_id' => 10
                ],
                [
                    'd_asenta' => 'Márques de León',
                    'd_codigo' => 22810,
                    'municipio_id' => 10
                ],
                [
                    'd_asenta' => 'Ejido Ruiz Cortines',
                    'd_codigo' => 22810,
                    'municipio_id' => 10
                ],
                [
                    'd_asenta' => 'Las Lomitas',
                    'd_codigo' => 22810,
                    'municipio_id' => 10
                ],
                [
                    'd_asenta' => 'Lomas y Jardines de Valle Verde',
                    'd_codigo' => 22810,
                    'municipio_id' => 10
                ],
                [
                    'd_asenta' => 'Centro Cívico',
                    'd_codigo' => 21000,
                    'municipio_id' => 11
                ],
                [
                    'd_asenta' => 'Caliss',
                    'd_codigo' => 21010,
                    'municipio_id' => 11
                ],
                [
                    'd_asenta' => 'Industrial',
                    'd_codigo' => 21010,
                    'municipio_id' => 11
                ],
                [
                    'd_asenta' => 'Residencial Cerrada del Parque',
                    'd_codigo' => 21010,
                    'municipio_id' => 11
                ],
                [
                    'd_asenta' => 'Burócrata',
                    'd_codigo' => 21020,
                    'municipio_id' => 11
                ],
                [
                    'd_asenta' => 'Rosarito Centro',
                    'd_codigo' => 22700,
                    'municipio_id' => 12
                ],
                [
                    'd_asenta' => 'Quinta del Mar',
                    'd_codigo' => 22703,
                    'municipio_id' => 12
                ],
                [
                    'd_asenta' => 'Termoeléctrica',
                    'd_codigo' => 22703,
                    'municipio_id' => 12
                ],
                [
                    'd_asenta' => 'Villas del Mar',
                    'd_codigo' => 22703,
                    'municipio_id' => 12
                ],
                [
                    'd_asenta' => '5ta. Plaza',
                    'd_codigo' => 22703,
                    'municipio_id' => 12
                ],
                [
                    'd_asenta' => 'Las Brisas',
                    'd_codigo' => 22790,
                    'municipio_id' => 13
                ],
                [
                    'd_asenta' => 'Loma Bonita',
                    'd_codigo' => 22790,
                    'municipio_id' => 13
                ],
                [
                    'd_asenta' => 'Vista del Valle',
                    'd_codigo' => 22790,
                    'municipio_id' => 13
                ],
                [
                    'd_asenta' => 'José López Portillo',
                    'd_codigo' => 22790,
                    'municipio_id' => 13
                ],
                [
                    'd_asenta' => 'El Veladero (Ejido Nacionalista)',
                    'd_codigo' => 22790,
                    'municipio_id' => 13
                ],
                [
                    'd_asenta' => 'Primera Sección',
                    'd_codigo' => 21850,
                    'municipio_id' => 14
                ],
                [
                    'd_asenta' => 'La Curva',
                    'd_codigo' => 21850,
                    'municipio_id' => 14
                ],
                [
                    'd_asenta' => 'Naval San Felipe',
                    'd_codigo' => 21850,
                    'municipio_id' => 14
                ],
                [
                    'd_asenta' => 'Guarnición Militar',
                    'd_codigo' => 21850,
                    'municipio_id' => 14
                ],
                [
                    'd_asenta' => 'Militar',
                    'd_codigo' => 21850,
                    'municipio_id' => 14
                ],
                [
                    'd_asenta' => 'Tecate Centro',
                    'd_codigo' => 21400,
                    'municipio_id' => 15
                ],
                [
                    'd_asenta' => 'Espinoza',
                    'd_codigo' => 21410,
                    'municipio_id' => 15
                ],
                [
                    'd_asenta' => 'Prohogar',
                    'd_codigo' => 21410,
                    'municipio_id' => 15
                ],
                [
                    'd_asenta' => 'Romero',
                    'd_codigo' => 21410,
                    'municipio_id' => 15
                ],
                [
                    'd_asenta' => 'Esteban Cantú',
                    'd_codigo' => 21420,
                    'municipio_id' => 15
                ],
                [
                    'd_asenta' => 'Zona Centro',
                    'd_codigo' => 22000,
                    'municipio_id' => 16
                ],
                [
                    'd_asenta' => 'Zona Este',
                    'd_codigo' => 22000,
                    'municipio_id' => 16
                ],
                [
                    'd_asenta' => 'Zona Norte',
                    'd_codigo' => 22000,
                    'municipio_id' => 16
                ],
                [
                    'd_asenta' => 'Empleados Federales',
                    'd_codigo' => 22010,
                    'municipio_id' => 16
                ],
                [
                    'd_asenta' => 'Cuauhtémoc',
                    'd_codigo' => 22010,
                    'municipio_id' => 16
                ],
                [
                    'd_asenta' => 'Cabo San Lucas Centro',
                    'd_codigo' => 23450,
                    'municipio_id' => 17
                ],
                [
                    'd_asenta' => 'Plaza Bonita',
                    'd_codigo' => 23450,
                    'municipio_id' => 17
                ],
                [
                    'd_asenta' => 'Plaza Real',
                    'd_codigo' => 23450,
                    'municipio_id' => 17
                ],
                [
                    'd_asenta' => 'Plaza del Marlin',
                    'd_codigo' => 23450,
                    'municipio_id' => 17
                ],
                [
                    'd_asenta' => 'Plaza del Sol',
                    'd_codigo' => 23450,
                    'municipio_id' => 17
                ],
                [
                    'd_asenta' => 'Zona Centro',
                    'd_codigo' => 23600,
                    'municipio_id' => 18
                ],
                [
                    'd_asenta' => 'Cerro Catedral',
                    'd_codigo' => 23600,
                    'municipio_id' => 18
                ],
                [
                    'd_asenta' => 'INVI Olivos Juan Domínguez Cota',
                    'd_codigo' => 23600,
                    'municipio_id' => 18
                ],
                [
                    'd_asenta' => 'Las Palmas',
                    'd_codigo' => 23610,
                    'municipio_id' => 18
                ],
                [
                    'd_asenta' => 'Vargas',
                    'd_codigo' => 23620,
                    'municipio_id' => 18
                ],
                [
                    'd_asenta' => 'Fundo Legal',
                    'd_codigo' => 23940,
                    'municipio_id' => 19
                ],
                [
                    'd_asenta' => 'El Dominó',
                    'd_codigo' => 23940,
                    'municipio_id' => 19
                ],
                [
                    'd_asenta' => 'Guerrero Negro Centro',
                    'd_codigo' => 23940,
                    'municipio_id' => 19
                ],
                [
                    'd_asenta' => 'Loma Bonita',
                    'd_codigo' => 23940,
                    'municipio_id' => 19
                ],
                [
                    'd_asenta' => 'Solidaridad',
                    'd_codigo' => 23940,
                    'municipio_id' => 19
                ],
                [
                    'd_asenta' => 'La Paloma',
                    'd_codigo' => 23900,
                    'municipio_id' => 20
                ],
                [
                    'd_asenta' => 'Nuevo Mulege',
                    'd_codigo' => 23900,
                    'municipio_id' => 20
                ],
                [
                    'd_asenta' => 'Heroica Mulegé Centro',
                    'd_codigo' => 23900,
                    'municipio_id' => 20
                ],
                [
                    'd_asenta' => 'El Rebaje',
                    'd_codigo' => 23900,
                    'municipio_id' => 20
                ],
                [
                    'd_asenta' => 'El Ranchito',
                    'd_codigo' => 23900,
                    'municipio_id' => 20
                ],
                [
                    'd_asenta' => 'Zona Central',
                    'd_codigo' => 23000,
                    'municipio_id' => 21
                ],
                [
                    'd_asenta' => 'Palacio de Gobierno del Estado de Baja California Sur',
                    'd_codigo' => 23007,
                    'municipio_id' => 21
                ],
                [
                    'd_asenta' => 'Oficina Federal de Hacienda',
                    'd_codigo' => 23009,
                    'municipio_id' => 21
                ],
                [
                    'd_asenta' => 'Ciudad del Cielo',
                    'd_codigo' => 23010,
                    'municipio_id' => 21
                ],
                [
                    'd_asenta' => 'Colina del Sol',
                    'd_codigo' => 23010,
                    'municipio_id' => 21
                ],
                [
                    'd_asenta' => 'INVI',
                    'd_codigo' => 23880,
                    'municipio_id' => 22
                ],
                [
                    'd_asenta' => 'Centro',
                    'd_codigo' => 23880,
                    'municipio_id' => 22
                ],
                [
                    'd_asenta' => 'Zaragoza',
                    'd_codigo' => 23880,
                    'municipio_id' => 22
                ],
                [
                    'd_asenta' => 'Obrera',
                    'd_codigo' => 23880,
                    'municipio_id' => 22
                ],
                [
                    'd_asenta' => 'El Jaral',
                    'd_codigo' => 23880,
                    'municipio_id' => 22
                ],
                [
                    'd_asenta' => 'Puerto Adolfo López Mateos',
                    'd_codigo' => 23710,
                    'municipio_id' => 24
                ],
                [
                    'd_asenta' => 'El Rincón',
                    'd_codigo' => 23930,
                    'municipio_id' => 25
                ],
                [
                    'd_asenta' => 'La Correa',
                    'd_codigo' => 23930,
                    'municipio_id' => 25
                ],
                [
                    'd_asenta' => 'Rastro',
                    'd_codigo' => 23930,
                    'municipio_id' => 25
                ],
                [
                    'd_asenta' => 'San Ignacio Centro',
                    'd_codigo' => 23930,
                    'municipio_id' => 25
                ],
                [
                    'd_asenta' => 'Guamúchil',
                    'd_codigo' => 23930,
                    'municipio_id' => 25
                ],
                [
                    'd_asenta' => 'San José del Cabo Centro',
                    'd_codigo' => 23400,
                    'municipio_id' => 26
                ],
                [
                    'd_asenta' => 'El Encanto de la Laguna',
                    'd_codigo' => 23403,
                    'municipio_id' => 26
                ],
                [
                    'd_asenta' => 'Rincón de la Playa',
                    'd_codigo' => 23403,
                    'municipio_id' => 26
                ],
                [
                    'd_asenta' => 'La Playa',
                    'd_codigo' => 23403,
                    'municipio_id' => 26
                ],
                [
                    'd_asenta' => 'San Vicente',
                    'd_codigo' => 23403,
                    'municipio_id' => 26
                ],
                [
                    'd_asenta' => 'Los Frailes',
                    'd_codigo' => 23920,
                    'municipio_id' => 27
                ],
                [
                    'd_asenta' => 'Unidad Deportiva',
                    'd_codigo' => 23920,
                    'municipio_id' => 27
                ],
                [
                    'd_asenta' => 'CADEPO',
                    'd_codigo' => 23920,
                    'municipio_id' => 27
                ],
                [
                    'd_asenta' => 'Reforma',
                    'd_codigo' => 23920,
                    'municipio_id' => 27
                ],
                [
                    'd_asenta' => 'Imperial',
                    'd_codigo' => 23920,
                    'municipio_id' => 27
                ],
                [
                    'd_asenta' => 'Centro',
                    'd_codigo' => 23300,
                    'municipio_id' => 28
                ],
                [
                    'd_asenta' => 'La Calera',
                    'd_codigo' => 23300,
                    'municipio_id' => 28
                ],
                [
                    'd_asenta' => 'El Coyote',
                    'd_codigo' => 23300,
                    'municipio_id' => 28
                ],
                [
                    'd_asenta' => 'Pueblo Nuevo',
                    'd_codigo' => 23300,
                    'municipio_id' => 28
                ],
                [
                    'd_asenta' => 'Las Tunas',
                    'd_codigo' => 23300,
                    'municipio_id' => 28
                ],
                [
                    'd_asenta' => 'Unión y Progreso',
                    'd_codigo' => 23938,
                    'municipio_id' => 29
                ],
                [
                    'd_asenta' => 'Nueva Oaxaca',
                    'd_codigo' => 23938,
                    'municipio_id' => 29
                ],
                [
                    'd_asenta' => 'Leonel Cota Montaño',
                    'd_codigo' => 23938,
                    'municipio_id' => 29
                ],
                [
                    'd_asenta' => 'Villa Alberto Alvarado Aramburo',
                    'd_codigo' => 23938,
                    'municipio_id' => 29
                ],
                [
                    'd_asenta' => 'Magisterial',
                    'd_codigo' => 23938,
                    'municipio_id' => 29
                ],
                [
                    'd_asenta' => 'San Francisco de Campeche Centro',
                    'd_codigo' => 24000,
                    'municipio_id' => 30
                ],
                [
                    'd_asenta' => 'Guadalupe',
                    'd_codigo' => 24010,
                    'municipio_id' => 30
                ],
                [
                    'd_asenta' => 'Pablo Garcia',
                    'd_codigo' => 24010,
                    'municipio_id' => 30
                ],
                [
                    'd_asenta' => 'San Francisco',
                    'd_codigo' => 24010,
                    'municipio_id' => 30
                ],
                [
                    'd_asenta' => 'Villa del Río',
                    'd_codigo' => 24010,
                    'municipio_id' => 30
                ],
                [
                    'd_asenta' => 'Saltillo Centro',
                    'd_codigo' => 25000,
                    'municipio_id' => 31
                ],
                [
                    'd_asenta' => 'Vista Hermosa',
                    'd_codigo' => 25010,
                    'municipio_id' => 31
                ],
                [
                    'd_asenta' => 'La Fuente',
                    'd_codigo' => 25010,
                    'municipio_id' => 31
                ],
                [
                    'd_asenta' => 'Privada la Misión',
                    'd_codigo' => 25010,
                    'municipio_id' => 31
                ],
                [
                    'd_asenta' => 'Privada la Campana',
                    'd_codigo' => 25010,
                    'municipio_id' => 31
                ],
                [
                    'd_asenta' => 'Allende Centro',
                    'd_codigo' => 26530,
                    'municipio_id' => 32
                ],
                [
                    'd_asenta' => 'Manantial',
                    'd_codigo' => 26532,
                    'municipio_id' => 32
                ],
                [
                    'd_asenta' => 'Ignacio Allende',
                    'd_codigo' => 26532,
                    'municipio_id' => 32
                ],
                [
                    'd_asenta' => 'Las Brisas',
                    'd_codigo' => 26532,
                    'municipio_id' => 32
                ],
                [
                    'd_asenta' => 'San Tito',
                    'd_codigo' => 26532,
                    'municipio_id' => 32
                ],
                [
                    'd_asenta' => 'Arteaga Centro',
                    'd_codigo' => 25350,
                    'municipio_id' => 33
                ],
                [
                    'd_asenta' => 'Autopista',
                    'd_codigo' => 25352,
                    'municipio_id' => 33
                ],
                [
                    'd_asenta' => 'Residencial la Nogalera',
                    'd_codigo' => 25352,
                    'municipio_id' => 33
                ],
                [
                    'd_asenta' => 'Santa Elena',
                    'd_codigo' => 25352,
                    'municipio_id' => 33
                ],
                [
                    'd_asenta' => 'Jardín',
                    'd_codigo' => 25352,
                    'municipio_id' => 33
                ],
                [
                    'd_asenta' => 'Castaños Centro',
                    'd_codigo' => 25870,
                    'municipio_id' => 34
                ],
                [
                    'd_asenta' => 'Independencia',
                    'd_codigo' => 25870,
                    'municipio_id' => 34
                ],
                [
                    'd_asenta' => 'California',
                    'd_codigo' => 25870,
                    'municipio_id' => 34
                ],
                [
                    'd_asenta' => 'Emiliano Zapata',
                    'd_codigo' => 25870,
                    'municipio_id' => 34
                ],
                [
                    'd_asenta' => 'Héroes del 47',
                    'd_codigo' => 25870,
                    'municipio_id' => 34
                ],
                [
                    'd_asenta' => 'Ciudad Acuña Centro',
                    'd_codigo' => 26200,
                    'municipio_id' => 35
                ],
                [
                    'd_asenta' => 'Granjas del Valle',
                    'd_codigo' => 26210,
                    'municipio_id' => 35
                ],
                [
                    'd_asenta' => 'La Rivera',
                    'd_codigo' => 26210,
                    'municipio_id' => 35
                ],
                [
                    'd_asenta' => 'División del Norte',
                    'd_codigo' => 26210,
                    'municipio_id' => 35
                ],
                [
                    'd_asenta' => 'Luis Donaldo Colosio',
                    'd_codigo' => 26210,
                    'municipio_id' => 35
                ],
                [
                    'd_asenta' => 'Colima Centro',
                    'd_codigo' => 28000,
                    'municipio_id' => 36
                ],
                [
                    'd_asenta' => 'Lomas de Circunvalación',
                    'd_codigo' => 28010,
                    'municipio_id' => 36
                ],
                [
                    'd_asenta' => 'Militar Lomas',
                    'd_codigo' => 28010,
                    'municipio_id' => 36
                ],
                [
                    'd_asenta' => 'Jardines de las Lomas',
                    'd_codigo' => 28014,
                    'municipio_id' => 36
                ],
                [
                    'd_asenta' => 'Lomas Vistahermosa',
                    'd_codigo' => 28016,
                    'municipio_id' => 36
                ],
                [
                    'd_asenta' => 'Armería Centro',
                    'd_codigo' => 28300,
                    'municipio_id' => 37
                ],
                [
                    'd_asenta' => 'Cristo Rey',
                    'd_codigo' => 28304,
                    'municipio_id' => 37
                ],
                [
                    'd_asenta' => 'Lázaro Cárdenas',
                    'd_codigo' => 28304,
                    'municipio_id' => 37
                ],
                [
                    'd_asenta' => 'Lindavista',
                    'd_codigo' => 28304,
                    'municipio_id' => 37
                ],
                [
                    'd_asenta' => 'Ejido',
                    'd_codigo' => 28305,
                    'municipio_id' => 37
                ],
                [
                    'd_asenta' => 'Villa de Álvarez Centro',
                    'd_codigo' => 28970,
                    'municipio_id' => 38
                ],
                [
                    'd_asenta' => 'Villas del Sol',
                    'd_codigo' => 28970,
                    'municipio_id' => 38
                ],
                [
                    'd_asenta' => 'Floresta',
                    'd_codigo' => 28973,
                    'municipio_id' => 38
                ],
                [
                    'd_asenta' => 'Manuel M. Diéguez',
                    'd_codigo' => 28973,
                    'municipio_id' => 38
                ],
                [
                    'd_asenta' => 'Real los Arcos',
                    'd_codigo' => 28973,
                    'municipio_id' => 38
                ],
                [
                    'd_asenta' => 'San José (Sector 3)',
                    'd_codigo' => 28200,
                    'municipio_id' => 39
                ],
                [
                    'd_asenta' => 'La Providencia (Sector 3)',
                    'd_codigo' => 28200,
                    'municipio_id' => 39
                ],
                [
                    'd_asenta' => 'El Vigia (Sector 1)',
                    'd_codigo' => 28200,
                    'municipio_id' => 39
                ],
                [
                    'd_asenta' => 'El Tamarindo (Sector 2)',
                    'd_codigo' => 28200,
                    'municipio_id' => 39
                ],
                [
                    'd_asenta' => 'Calle Nueva ( Sector 3)',
                    'd_codigo' => 28200,
                    'municipio_id' => 39
                ],
                [
                    'd_asenta' => 'Tecomán Centro',
                    'd_codigo' => 28100,
                    'municipio_id' => 40
                ],
                [
                    'd_asenta' => 'Tepeyac',
                    'd_codigo' => 28110,
                    'municipio_id' => 40
                ],
                [
                    'd_asenta' => 'Manuel Álvarez',
                    'd_codigo' => 28110,
                    'municipio_id' => 40
                ],
                [
                    'd_asenta' => 'Miguel Hidalgo',
                    'd_codigo' => 28110,
                    'municipio_id' => 40
                ],
                [
                    'd_asenta' => 'Josefa Ortiz de Domínguez',
                    'd_codigo' => 28110,
                    'municipio_id' => 40
                ],
                [
                    'd_asenta' => 'Acala Centro',
                    'd_codigo' => 29370,
                    'municipio_id' => 41
                ],
                [
                    'd_asenta' => 'Candelaria',
                    'd_codigo' => 29372,
                    'municipio_id' => 41
                ],
                [
                    'd_asenta' => 'San Pedro',
                    'd_codigo' => 29372,
                    'municipio_id' => 41
                ],
                [
                    'd_asenta' => 'Salomón González Blanco',
                    'd_codigo' => 29372,
                    'municipio_id' => 41
                ],
                [
                    'd_asenta' => 'San José 19 de Marzo',
                    'd_codigo' => 29372,
                    'municipio_id' => 41
                ],
                [
                    'd_asenta' => 'Arriaga Centro',
                    'd_codigo' => 30450,
                    'municipio_id' => 42
                ],
                [
                    'd_asenta' => 'Venustiano Carranza',
                    'd_codigo' => 30453,
                    'municipio_id' => 42
                ],
                [
                    'd_asenta' => 'El Carmen',
                    'd_codigo' => 30453,
                    'municipio_id' => 42
                ],
                [
                    'd_asenta' => 'Fovissste',
                    'd_codigo' => 30453,
                    'municipio_id' => 42
                ],
                [
                    'd_asenta' => 'Buenos Aires',
                    'd_codigo' => 30453,
                    'municipio_id' => 42
                ],
                [
                    'd_asenta' => 'Rosario Ixtal',
                    'd_codigo' => 30890,
                    'municipio_id' => 43
                ],
                [
                    'd_asenta' => 'FOVISSSTE Cacahoatán',
                    'd_codigo' => 30890,
                    'municipio_id' => 43
                ],
                [
                    'd_asenta' => 'Santa Lucía',
                    'd_codigo' => 30890,
                    'municipio_id' => 43
                ],
                [
                    'd_asenta' => 'La Unidad',
                    'd_codigo' => 30890,
                    'municipio_id' => 43
                ],
                [
                    'd_asenta' => 'Monte Bello',
                    'd_codigo' => 30890,
                    'municipio_id' => 43
                ],
                [
                    'd_asenta' => 'Residencial Monte Bello',
                    'd_codigo' => 29160,
                    'municipio_id' => 44
                ],
                [
                    'd_asenta' => 'Chiapa de Corzo Centro',
                    'd_codigo' => 29160,
                    'municipio_id' => 44
                ],
                [
                    'd_asenta' => 'Juan de Grijalva',
                    'd_codigo' => 29160,
                    'municipio_id' => 44
                ],
                [
                    'd_asenta' => 'Nocatili',
                    'd_codigo' => 29160,
                    'municipio_id' => 44
                ],
                [
                    'd_asenta' => 'Nuevo Carmen Tonapac',
                    'd_codigo' => 29160,
                    'municipio_id' => 44
                ],
                [
                    'd_asenta' => 'Jardines de Cintalapa',
                    'd_codigo' => 30400,
                    'municipio_id' => 45
                ],
                [
                    'd_asenta' => 'Cintalapa de Figueroa Centro',
                    'd_codigo' => 30400,
                    'municipio_id' => 45
                ],
                [
                    'd_asenta' => 'Urbana',
                    'd_codigo' => 30400,
                    'municipio_id' => 45
                ],
                [
                    'd_asenta' => 'Insurgentes',
                    'd_codigo' => 30400,
                    'municipio_id' => 45
                ],
                [
                    'd_asenta' => 'Juan Sabines',
                    'd_codigo' => 30400,
                    'municipio_id' => 45
                ],
                [
                    'd_asenta' => 'Bachiniva Centro',
                    'd_codigo' => 31660,
                    'municipio_id' => 46
                ],
                [
                    'd_asenta' => 'San José',
                    'd_codigo' => 31663,
                    'municipio_id' => 46
                ],
                [
                    'd_asenta' => 'Constitución',
                    'd_codigo' => 31665,
                    'municipio_id' => 46
                ],
                [
                    'd_asenta' => '1ro de Mayo',
                    'd_codigo' => 31665,
                    'municipio_id' => 46
                ],
                [
                    'd_asenta' => 'Chihuahua Centro',
                    'd_codigo' => 31000,
                    'municipio_id' => 47
                ],
                [
                    'd_asenta' => 'San Pedro',
                    'd_codigo' => 31000,
                    'municipio_id' => 47
                ],
                [
                    'd_asenta' => 'Sector Bolívar',
                    'd_codigo' => 31000,
                    'municipio_id' => 47
                ],
                [
                    'd_asenta' => 'Parque Rotario',
                    'd_codigo' => 31000,
                    'municipio_id' => 47
                ],
                [
                    'd_asenta' => 'Colon',
                    'd_codigo' => 31000,
                    'municipio_id' => 47
                ],
                [
                    'd_asenta' => 'San José',
                    'd_codigo' => 31600,
                    'municipio_id' => 48
                ],
                [
                    'd_asenta' => 'Anáhuac Centro',
                    'd_codigo' => 31600,
                    'municipio_id' => 48
                ],
                [
                    'd_asenta' => 'El Pino',
                    'd_codigo' => 31600,
                    'municipio_id' => 48
                ],
                [
                    'd_asenta' => 'Sierra Blanca',
                    'd_codigo' => 31600,
                    'municipio_id' => 48
                ],
                [
                    'd_asenta' => 'Solidaridad',
                    'd_codigo' => 31600,
                    'municipio_id' => 48
                ],
                [
                    'd_asenta' => 'Ciudad Cuauhtémoc Centro',
                    'd_codigo' => 31500,
                    'municipio_id' => 49
                ],
                [
                    'd_asenta' => 'Rincones 2',
                    'd_codigo' => 31510,
                    'municipio_id' => 49
                ],
                [
                    'd_asenta' => 'Área Cuarteles',
                    'd_codigo' => 31510,
                    'municipio_id' => 49
                ],
                [
                    'd_asenta' => 'Agrícola San Antonio',
                    'd_codigo' => 31510,
                    'municipio_id' => 49
                ],
                [
                    'd_asenta' => 'CTM',
                    'd_codigo' => 31510,
                    'municipio_id' => 49
                ]
            ]);
        }
    }
}
