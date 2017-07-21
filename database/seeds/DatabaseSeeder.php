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
        $this->call(AreasTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(NoticiasTableSeeder::class);

        // organigrama
        $this->call( OrganigramaTableSeeder::class );
        // solicitudes
        $this->call( TipoSolitudesTableSeeder::class );
        $this->call( MotivoSolitudesTableSeeder::class );
        $this->call( EstadoSolitudesTableSeeder::class );

    }
}
