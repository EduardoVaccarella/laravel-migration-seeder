<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
        
            $train = new Train();

        $train->Azienda = $faker->bothify('????-####');
        $train->StazioneDiPartenza = $faker->word();
        $train->StazioneDiArrivo = $faker->word();
        $train->OrarioDiPartenza = $faker->time();
        $train->OrarioDiArrivo = $faker->time();
        $train->CodiceTreno = $faker->bothify('????-####');
        $train->NumeroDiCarrozze = $faker->numerify();
        $train->InOrario = $faker->boolean();
        $train->Cancellato = $faker->boolean();

        $train->save();

        }


    }
}
