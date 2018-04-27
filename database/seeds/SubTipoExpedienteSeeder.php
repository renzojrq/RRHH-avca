<?php

use Illuminate\Database\Seeder;

class SubTipoExpedienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subtipo_expediente')->insert([
           
            ['nombre'  => 'verbal',
            'tipo_expediente_id'  => 1 
             ],

             ['nombre'  => 'escrita',
            'tipo_expediente_id'  => 1
             ],


             ['nombre'  => 'trabajador del mes',
             'tipo_expediente_id'  => 2
              ],

              ['nombre'  => '5 años de servicios',
              'tipo_expediente_id'  => 2
               ],

             ['nombre'  => '10 años de servicios',
             'tipo_expediente_id'  => 2
              ],

             ['nombre'  => '15 años de servicios',
             'tipo_expediente_id'  => 2
              ],

             ['nombre'  => '20 años de servicios',
             'tipo_expediente_id'  => 2
              ],

             ['nombre'  => '25 años de servicios',
             'tipo_expediente_id'  => 2
              ],

             ['nombre'  => 'puntualidad',
             'tipo_expediente_id'  => 2
              ],

             ['nombre'  => 'responsabilidad',
             'tipo_expediente_id'  => 2
              ],


              ['nombre'  => 'certificacion',
              'tipo_expediente_id'  => 3
               ],

              ['nombre'  => 'grado',
              'tipo_expediente_id'  => 3
               ],

              ['nombre'  => 'especializacion 1',
              'tipo_expediente_id'  => 3
               ],

              ['nombre'  => 'especializacion 2',
              'tipo_expediente_id'  => 3
               ],

              ['nombre'  => 'bachiller',
              'tipo_expediente_id'  => 3
               ],



              ['nombre'  => 'contratacion',
              'tipoexpediente_id'  => 4
               ],

               ['nombre'  => 'pase a fijo',
               'tipoexpediente_id'  => 4
                ],

              ['nombre'  => 'fin de relacion laboral',
              'tipoexpediente_id'  => 4
               ],

              ['nombre'  => 'nombramiento de jefatura',
              'tipoexpediente_id'  => 4
               ],


              ['nombre'  => 'accidente laboral',
              'tipoexpediente_id'  => 5
               ],


               ['nombre'  => 'vacaciones',
               'tipoexpediente_id'  => 6
                ],

               ['nombre'  => 'reposos medicos',
               'tipoexpediente_id'  => 6
                ],

               ['nombre'  => 'matrimonios',
               'tipoexpediente_id'  => 6
                ],

               ['nombre'  => 'judiciales',
               'tipoexpediente_id'  => 6
                ],

               ['nombre'  => 'nacimientos',
               'tipoexpediente_id'  => 6
                ],

               ['nombre'  => 'prenatal',
               'tipoexpediente_id'  => 6
                ],

               ['nombre'  => 'postnatal',
               'tipoexpediente_id'  => 6
                ],

               ['nombre'  => 'militar',
               'tipoexpediente_id'  => 6
                ],

               ['nombre'  => 'fallecimientos',
               'tipoexpediente_id'  => 6
                ],
             
               ]);

    }
}
