<?php

use Illuminate\Database\Seeder;
use App\Horario;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horario::create([
            'dia' => 'LUNES',
            'hora_desde' => '07:45:00',
            'hora_hasta' => '10:00:00',
        ]);
        Horario::create([
            'dia' => 'LUNES',
            'hora_desde' => '10:00:00',
            'hora_hasta' => '12:15:00',
        ]);
        Horario::create([
            'dia' => 'LUNES',
            'hora_desde' => '14:00:00',
            'hora_hasta' => '16:15:00',
        ]);
        Horario::create([
            'dia' => 'LUNES',
            'hora_desde' => '16:15:00',
            'hora_hasta' => '18:30:00',
        ]);

        Horario::create([
            'dia' => 'MARTES',
            'hora_desde' => '07:45:00',
            'hora_hasta' => '10:00:00',
        ]);
        Horario::create([
            'dia' => 'MARTES',
            'hora_desde' => '10:00:00',
            'hora_hasta' => '12:15:00',
        ]);
        Horario::create([
            'dia' => 'MARTES',
            'hora_desde' => '14:00:00',
            'hora_hasta' => '16:15:00',
        ]);
        Horario::create([
            'dia' => 'MARTES',
            'hora_desde' => '16:15:00',
            'hora_hasta' => '18:30:00',
        ]);

        Horario::create([
            'dia' => 'MIERCOLES',
            'hora_desde' => '07:45:00',
            'hora_hasta' => '10:00:00',
        ]);
        Horario::create([
            'dia' => 'MIERCOLES',
            'hora_desde' => '10:00:00',
            'hora_hasta' => '12:15:00',
        ]);
        Horario::create([
            'dia' => 'MIERCOLES',
            'hora_desde' => '14:00:00',
            'hora_hasta' => '16:15:00',
        ]);
        Horario::create([
            'dia' => 'MIERCOLES',
            'hora_desde' => '16:15:00',
            'hora_hasta' => '18:30:00',
        ]);

        Horario::create([
            'dia' => 'JUEVES',
            'hora_desde' => '07:45:00',
            'hora_hasta' => '10:00:00',
        ]);
        Horario::create([
            'dia' => 'JUEVES',
            'hora_desde' => '10:00:00',
            'hora_hasta' => '12:15:00',
        ]);
        Horario::create([
            'dia' => 'JUEVES',
            'hora_desde' => '14:00:00',
            'hora_hasta' => '16:15:00',
        ]);
        Horario::create([
            'dia' => 'JUEVES',
            'hora_desde' => '16:15:00',
            'hora_hasta' => '18:30:00',
        ]);

        Horario::create([
            'dia' => 'VIERNES',
            'hora_desde' => '07:45:00',
            'hora_hasta' => '10:00:00',
        ]);
        Horario::create([
            'dia' => 'VIERNES',
            'hora_desde' => '10:00:00',
            'hora_hasta' => '12:15:00',
        ]);
        Horario::create([
            'dia' => 'VIERNES',
            'hora_desde' => '14:00:00',
            'hora_hasta' => '16:15:00',
        ]);
        Horario::create([
            'dia' => 'VIERNES',
            'hora_desde' => '16:15:00',
            'hora_hasta' => '18:30:00',
        ]);
    }
}
