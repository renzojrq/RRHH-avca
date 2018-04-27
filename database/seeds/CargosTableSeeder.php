<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            [
                'nombre'               => 'director operaciones aéreas',                
                'tabulador_salarial_id'=> 24,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],            
            [
                'nombre'               => 'director tecnico',                
                'tabulador_salarial_id'=> 24,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'secretaria ejecutiva',                
                'tabulador_salarial_id'=> 2,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'coordinador rampa y despacho',                
                'tabulador_salarial_id'=> 2,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'gestor de calidad',              
                'tabulador_salarial_id'=> 15,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'gestor de aeronáutica civil',                
                'tabulador_salarial_id'=> 15,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'analista operacional de flota',                
                'tabulador_salarial_id'=> 15,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'estandarizador equipos operados por avca',                
                'tabulador_salarial_id'=> 16,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'piloto ',                
                'tabulador_salarial_id'=> 19,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'Copiloto ',                
                'tabulador_salarial_id'=> 18,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'auxiliar de servicio abordo',                
                'tabulador_salarial_id'=> 13,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'despachador de aviones',                
                'tabulador_salarial_id'=> 11,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'despachador instructor',                
                'tabulador_salarial_id'=> 12,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'auxiliar de despacho',                
                'tabulador_salarial_id'=> 1,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'estadistica centro control de operaciones',                
                'tabulador_salarial_id'=> 1,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'auxiliar equipo terrestre de apoyo aeronautico',                
                'tabulador_salarial_id'=> 1,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'operador de radio',                
                'tabulador_salarial_id'=> 5,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ],
            [
                'nombre'               => 'tecnico gestion entrenamiento pilotos',                
                'tabulador_salarial_id'=> 3,
                'perfil_pdf'               => '',
                'created_at'           => date('Y-m-d H:i:s'),
                'updated_at'           => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
