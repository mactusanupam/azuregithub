<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       for($i=1; $i<=25; $i++) {
            DB::table('users')->insert([
                 'name' => 'Anupam'.$i,
                 'email' => 'anupamkumari121'.$i.'@gmail.com',
                'password' => bcrypt('anupam'),
            ]);
      }
    }
}
