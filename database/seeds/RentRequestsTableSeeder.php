<?php

use Illuminate\Database\Seeder;

class RentRequestsTableSeeder extends Seeder
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
            DB::table('rent_requests')->insert([
                'requester_id' => 1,
                'item_id' => 6,
                'accepted' => true,
                'resolved' => true,
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }
}
