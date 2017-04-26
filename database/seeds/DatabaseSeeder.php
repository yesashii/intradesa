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
        $this->call(SucursalesTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(NoticiasTableSeeder::class);
    }
}
