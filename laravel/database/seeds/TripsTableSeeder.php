<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            $newTrip = new Trip();
            $newTrip->name = "viaggio bello";
            $newTrip->departs_from = "Roma";
            $newTrip->flight_included = rand(0,1);
            $newTrip->duration = rand(2, 30);
            $newTrip->max_participants = rand(10, 30);
            $newTrip->available_places = rand(1, 10);
            $newTrip->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet quis nam voluptatem laboriosam maiores";
            $newTrip->tour_operator = "Boscolo";
            $newTrip->tour_leader = "Gianluca";
            $newTrip->price_person = rand(45, 50000);

            $newTrip->save();
        }
    }
}
