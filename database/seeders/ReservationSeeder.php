<?php

namespace Database\Seeders;
use App\Models\Reservation;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation();
        $reservation->checkin = "2022-10-25";
        $reservation->checkout = "2022-10-27";
        $reservation->client_id = "1";
        $reservation->save();

        $reservation = new Reservation();
        $reservation->checkin = "2022-10-27";
        $reservation->checkout = "2022-10-30";
        $reservation->client_id = "2";
        $reservation->save();
    }
}
