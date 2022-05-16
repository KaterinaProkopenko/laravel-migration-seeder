<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->word(2);
            $newTrain->stazione_di_arrivo = $faker->word(2);
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(7, true);
            $newTrain->numero_carrozze = $faker->numberBetween(4, 18);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
