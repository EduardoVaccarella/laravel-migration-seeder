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
        $train = new Train();

        $train->Azienda = 'Trenitalia';
        $train->StazioneDiPartenza = 'Linate';
        $train->StazioneDiArrivo = 'Bergamo';
        $train->OrarioDiPartenza = '18:00:00';
        $train->OrarioDiArrivo = '19:00:00';
        $train->CodiceTreno = 'AD0993221';
        $train->NumeroDiCarrozze = 9;
        $train->InOrario = true;
        $train->Cancellato = false;

        $train->save();

    }
}
