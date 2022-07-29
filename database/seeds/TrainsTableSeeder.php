<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Train();
        $data->azienda = 'Italo';
        $data->stazione_di_partenza = 'Padova';
        $data->stazione_di_arrivo = 'Napoli';
        $data->data_di_partenza = '2022-08-08';
        $data->orario_di_partenza = '12:55';
        $data->orario_di_arrivo = '11:00';
        $data->codice_treno = 5322;
        $data->numero_carrozze = 22;
        $data->in_orario = 1;
        $data->cancellato = 0;
        $data->binario = 11;
        $data->save();
    }
}