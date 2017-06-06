<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = new Role();
      $role_admin->name = 'Administrador';
      $role_admin->save();

      $role_utente = new Role();
      $role_utente->name = 'Utente';
      $role_utente->save();

      $role_profissional = new Role();
      $role_profissional->name = 'Profissional de Saúde';
      $role_profissional->save();
    }
}
