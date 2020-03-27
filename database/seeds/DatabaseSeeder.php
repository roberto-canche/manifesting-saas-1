<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Gear;
use App\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'testroot@gmail.com',
            'password' => Hash::make('secret')
        ]);

        //factory(User::class)->create();
        
        factory(Gear::class)->times(20)->create();
        factory(Item::class)->times(15)->create();
    }
}
