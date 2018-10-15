<?php

use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Hermione Granger',
            'email' => 'hermione@renterhood.online',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
            'postal_code' => '68102',
            'phone_number' => mt_rand(1000000000, 9999999999),
        ]);

        factory(User::class, 49)->create();
    }
}
