<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings');

        $faker = Faker::create(); 
        $bookings = [];
        $facilities = ['Sports Hall', '3G Pitch', 'Classroom', 'Fields', 'Main Hall'];


        foreach (range(1,10) as $index) {
            $bookings[] = [
                
                'customer_id'=>rand(1,20),
                'facility' => $facilities[rand(1,4)],
                'date' => $faker -> dateTime(),
                'time_in' => $faker -> dateTime(),
                'time_out' => $faker -> dateTime(),
                'created_at' => new DateTime, 
                'updated_at'=> new DateTime
            ];
        }


        DB::table('bookings')->insert($bookings);
    }
}
