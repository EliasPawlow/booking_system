<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers');

        $faker = Faker::create(); 
        $customers = [];

        foreach (range(1,20) as $index) {
            $customers[] = [
                
                'name'=>$faker -> name,
                'email' => $faker -> email,
                'phone' => $faker -> phoneNumber,
                'address' => "{$faker -> streetName} {$faker -> city} {$faker -> postcode}",
                'created_at' => new DateTime, 
                'updated_at'=> new DateTime
                ,
            ];
        }


        DB::table('customers')->insert($customers);

    }
}
