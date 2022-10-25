<?php

namespace Database\Seeders;
use App\Models\Client;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->name = "Evelyn";
        $client->phone_number = "61223337011";
        $client->email = "evgo_19@alu.uabcs.mx";
        $client->save();

        $client = new Client();
        $client->name = "Angel Iran";
        $client->phone_number = "61223337011";
        $client->email = "iran@alu.uabcs.mx";
        $client->save();
    }
}
