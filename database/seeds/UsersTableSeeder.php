<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name','Administrador')->first();
      $role_utente = Role::where('name','Utente')->first();
      $role_prof = Role::where('name','Profissional de Saúde')->first();

    //Seed Admin
    $admin = new User();
    $admin->name = 'Admin';
    $admin->email = 'admin@aweb.com';
    $admin->password = bcrypt('secret');
  //  $admin->dataNasc = date("Y-m-d H:i:s");
  //  $admin->morada = 'Leiria';
  //  $admin->contacto = '913286332';
    $admin->save();
    $admin->role()->attach($role_admin);
///
  $prof = new User();
    $prof->name = 'Profissional';
    $prof->email = 'prof@aweb.com';
    $prof->password = bcrypt('secret');
  //  $admin->dataNasc = date("Y-m-d H:i:s");
  //  $admin->morada = 'Leiria';
  //  $admin->contacto = '913286332';
    $prof->save();
    $prof->role()->attach($role_prof);

    $utente = new User();
    $utente->name = 'utente';
    $utente->email = 'utente@aweb.com';
    $utente->password = bcrypt('secret');
  //  $admin->dataNasc = date("Y-m-d H:i:s");
  //  $admin->morada = 'Leiria';
  //  $admin->contacto = '913286332';
    $utente->save();
    $utente->role()->attach($role_utente);




    }
    



}
