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
        $this->call(AreasTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(VacantesTableSeeder::class);
        $this->call(ProfesionSeeder::class);
        $this->call(TipoExpedienteSeeder::class);
        $this->call(SubTipoExpedienteSeeder::class);
        $this->call(VariablesTableSeeder::class);
        $this->call(ConceptosTableSeeder::class);
        
        $this->call(EmpleadoTableSeeder::class);
        $this->call(AspirantesTableSeeder::class);
        $this->call(CargafamiliarTableSeeder::class);
        $this->call(EmpleadosConceptosTableSeeder::class);
        $this->call(NominaTableSeeder::class);
        $this->call(NominaConceptoTableSeeder::class);

        

        
        


    }
}
