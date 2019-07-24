<?php

use Illuminate\Database\Seeder;
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
        //creacion de los usuarios con los roles
            //usuario con el rol de super-admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $admin->assignRole('super-admin');
            //usuario para el rol de director
        $director = User::create([
            'name' => 'director',
            'email' => 'director@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $director->assignRole('director');
            //usuario para el rol de docente
        $docente = User::create([
            'name' => 'docente',
            'email' => 'docente@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $docente->assignRole('docente');
            // usuario parra el rol del estudiante
        $estudiante = User::create([
            'name' => 'estudiante',
            'email' => 'estudiante@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $estudiante->assignRole('estudiante');
    }
}
