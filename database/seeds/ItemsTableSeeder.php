<?php

use App\Item;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            DB::table('items')->insert([
                'user_id' => 1,
                'name' => 'Carpet Steamer',
                'description' => 'Carpet steamer that has only been used a few times. Rent for a week at a time.',
                'postal_code' => '68102',
                'price' => 1000,
                'picture' => 'img/CarpetSteamer.jpg',
            ]);

            DB::table('items')->insert([
                'user_id' => 1,
                'name' => 'Rider Lawn Mower',
                'description' => 'Rider lawn more for rent. Must have a trailer to pick it up. May need gas before using.',
                'postal_code' => '68102',
                'price' => 10000,
                'picture' => 'img/RiderLawnMower.jpg',
            ]);

            DB::table('items')->insert([
                'user_id' => 1,
                'name' => 'Chainsaw',
                'description' => 'STIHL brand chainsaw. Works like a charm. Will be full of gas and oil when picked up.',
                'postal_code' => '68102',
                'price' => 5000,
                'picture' => 'img/STIHLChainsaw.png',
            ]);

            DB::table('items')->insert([
                'user_id' => 2,
                'name' => 'Sewing Machine',
                'description' => 'Brand new sewing machine out of the box. Willing to rent out for long periods of time.',
                'postal_code' => '68102',
                'price' => 50000,
                'picture' => 'img/sewingMaching.jpeg',
            ]);

            DB::table('items')->insert([
                'user_id' => 2,
                'name' => 'Snow Blower',
                'description' => 'It\'s almost that time of year again. For rent for a day at a time.',
                'postal_code' => '68102',
                'price' => 0,
                'picture' => 'img/snowBlower.jpeg',
            ]);

            DB::table('items')->insert([
                'user_id' => 2,
                'name' => 'Dewalt Drill',
                'description' => 'Dewalt power drill. Battery and charger included when rented.',
                'postal_code' => '68102',
                'price' => 1500,
                'picture' => 'img/DewaltDrill.jpeg',
            ]);


            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }

//        DB::beginTransaction();
//
//        try {
//            factory(Item::class, 50)->create();
//            DB::commit();
//        } catch (\Exception $e) {
//            DB::rollBack();
//        }
    }
}
