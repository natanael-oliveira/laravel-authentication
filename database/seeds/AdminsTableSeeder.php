<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Natanael Oliveira Martins',
            'email' => 'natanaeloliveiramartinsbr@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
