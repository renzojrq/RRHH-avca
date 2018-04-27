<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $this->call(UsersTableSeeder::class);
        $this->call(SucursalesTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(TabuladorSalarialTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(ProfesionSeeder::class);
        $this->call(TipoExpedienteSeeder::class);
        $this->call(SubTipoExpedienteSeeder::class);
    }
}
